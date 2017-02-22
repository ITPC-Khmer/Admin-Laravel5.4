<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // for list + page
    function index()
    {
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
