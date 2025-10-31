<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Userrshp;

class UserController extends Controller
{
    public function index()
{
    $user = Userrshp::all();
    return view('admin.user.index', compact('user'));
}
}