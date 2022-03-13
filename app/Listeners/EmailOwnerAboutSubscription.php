<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserSubscribed;
use App\Mail\UserSubscribeMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class EmailOwnerAboutSubscription
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserSubscribed $event)
    {
        // Save Event in DB
        DB::table('newsletter')->insert([
            'email' => $event->email
        ]);

        // Send Mail to the Owner
        Mail::to($event->email)->send(new UserSubscribeMessage());
    }
}
