<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Events in Laravel 9

Events permits to do some task when something happends. 

### To start the project run in the root of project

```
./vendor/bin/sail up
```

This will start the containers of the project and a mysql database.

Access to the project in your web browser in http://localhost


### Steps

- Follow the steps in Laravel documentation to implement Tailwind CSS
- Create the Subscriber: sail php artisan make:event UserSubscriber
    The subscriber define the properti:  public $email, and init it in the constructor.
- Create the Listener: sail php artisan make:listener EmailOwnesAboutSubscriotion
    In the handle() method define the actions to do when the event is triggered
- The method subscribe() in NewsletterController is called when the subscribe form is submitted. It validates the email, and trigger the event. If the event occurs, then redirect to user subscribed page.


