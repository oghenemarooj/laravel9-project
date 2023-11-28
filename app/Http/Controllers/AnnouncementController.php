<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Notifications\AnnouncementCreated;
use Illuminate\Support\Facades\Notification;

class AnnouncementController extends Controller
{
    public function store(Request $request)
    {
        $announcement = Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        //[sending user]
        // $user = User::first();
        // $user->notify(new AnnouncementCreated($announcement));


        //[sending to email]
        // Notification::route('mail', ['someone@example.com' => 'John Doe'])->notify(new AnnouncementCreated($announcement));




        //[sending to multiple selected users]
        // $receipients = [
        //     'someone@example.com' => 'John Doe',
        //     'someone1@example.com' => 'John Wick',
        //     'someone2@example.com' => 'kon junk',
        // ];

        // Notification::route('mail', $receipients)->notify(new AnnouncementCreated($announcement));



        //[sending to all users on database]
        // $users = User::all();

        // Notification::route('mail', $users)->notify(new AnnouncementCreated($announcement));


        //[sending emails to the first 10 users at a time]
        User::chunk(10, function($users) use ($announcement)
        {
            $receipients = $users->pluck('name', 'email');
            Notification::route('mail', $users)->notify(new AnnouncementCreated($announcement));
        });


        return back()->with(['success' => 'Announcement created']);
    }
    public function view()
    {
        return view('admin.annouce');
    }
}
