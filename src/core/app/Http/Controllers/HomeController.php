<?php

namespace App\Http\Controllers;

use App\Services\Internals\UserService\UserServiceInterface;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('welcome');
    }
}
