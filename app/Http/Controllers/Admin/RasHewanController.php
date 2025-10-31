<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RasHewan;

class RasHewanController extends Controller
{
    public function index()
{
    $rasHewan = rasHewan::all();
    return view('admin.ras-hewan.index', compact('rasHewan'));
}
}