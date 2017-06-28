<?php

namespace App\Http\Controllers\Views;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create()
    {
      return view('users.create');
    }
}
