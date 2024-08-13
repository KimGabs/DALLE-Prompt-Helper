<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Parameter;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public Parameter $param;

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $paramCount = Parameter::count();
        $postCount = Post::count();
        $userCount = User::count();

        // Optionally pass data to the view
        return view('admin.dashboard', compact('paramCount', 'postCount', 'userCount'));
    }
}
