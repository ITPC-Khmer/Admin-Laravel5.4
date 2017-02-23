<?php

namespace App\Http\Controllers\Admin;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    // for list + page
    function index()
    {
       Mail::to('ksmart.lion@gmail.com')
           ->send(new OrderShipped());
       return view('admin.page.index');
    }

    function form()
    {
        return view('admin.page.form');
    }

    function save()
    {

    }

    /*function insert()
    {

    }*/

    function edit()
    {
        return view('admin.page.form');
    }

   /* function update()
    {

    }*/

    function delete()
    {

    }


}
