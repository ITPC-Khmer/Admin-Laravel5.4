<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function index($id)
    {
        return 'My C '.$id;
    }

}
