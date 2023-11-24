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

        //sending user
        // $user = User::first();
        // $user->notify(new AnnouncementCreated($announcement));


        //sending to email
        Notification::route('mail', ['someone@example.com' => 'John Doe'])->notify(new AnnouncementCreated($announcement));

        //sending to multiple users

        return back()->with(['success' => 'Announcement created']);
    }
    public function view()
    {
        return view('admin.annouce');
    }
}
