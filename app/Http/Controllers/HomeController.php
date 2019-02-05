<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use OneSignal;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function welcome()
    {
        $messages = Messages::latest()->first();
        foreach ($messages as $message){
           $body = $messages->body;
        }
        if (!$body){
            $body = "Bienvenue au Pixels Trade Notification System ";
        }
        OneSignal::sendNotificationToAll(
            $body, 
            $url = null, 
            $data = null, 
            $buttons = null, 
            $schedule = null
        );  

        return view ('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Messages::latest()->first();
        foreach ($messages as $message){
           $body = $messages->body;
        }
        if (!$body){
            $body = "Bienvenue au Pixels Trade Notification System ";
        }
        OneSignal::sendNotificationToAll(
            $body, 
            $url = null, 
            $data = null, 
            $buttons = null, 
            $schedule = null
        );    
        return view('home');
    }

    public function showManager()
    {
        return view('admin');
    }

    public function handleNotifications(Request $request)
    {
        $message = new Messages;
        $message->body = $request->message;
        $body = $request->message;
        $message->save();
        OneSignal::sendNotificationToAll(
            $body, 
            $url = null, 
            $data = null, 
            $buttons = null, 
            $schedule = null
        );    
        return redirect()->back();
    }
}
