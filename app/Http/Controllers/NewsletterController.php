<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserSubscribed;

class NewsletterController extends Controller
{
    public function index() {
        return view('index');
    }

    public function subscribe(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:newsletter,email'
        ]);

        if (event(new UserSubscribed($request->input('email')))) {
            return view('subscribed');
        };
        return back();
    }
}
