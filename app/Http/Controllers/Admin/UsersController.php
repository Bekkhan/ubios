<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\FormRequests;
use App\Models\Transport;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $feedbacks = Feedback::all();
        return view('admin.pages.users.index',compact('feedbacks'));
    }

    public function transport(){
        $transport = Transport::all();
        return view('admin.pages.transport', compact('transport'));
    }

    public function requests(){
        $requests = FormRequests::all();
        return view('admin.pages.requests', compact('requests'));
    }
}
