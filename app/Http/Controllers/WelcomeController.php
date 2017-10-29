<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $tasks = \DB::table('todos')->get();
        //return $tasks;
        return view( 'welcome', compact( 'tasks'));
    }
    //
}
