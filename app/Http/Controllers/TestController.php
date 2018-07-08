<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return "this is TestController's index";
    }

    public function hello($name)
    {
        return sprintf("Hi! %s!", $name);
    }

    public function givemeMoney()
    {
        return "impossible";
    }
}
