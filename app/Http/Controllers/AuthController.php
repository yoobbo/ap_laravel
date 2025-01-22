<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\storePostRequest;

class AuthController extends Controller
{
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}