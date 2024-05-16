<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = config('menu.items');
        
        $filteredMenuItems = array_filter($menuItems, function ($item) {
            $user = Auth::user();
            
            if ($user) {
                foreach ($item['roles'] as $role) {
                    if ($user->hasRole($role)) {
                        return true;
                    }
                }
                return false;
            } else {
                return in_array('guest', $item['roles']);
            }
        });

        return view('helper', ['menuItems' => $filteredMenuItems]);
    }
}
