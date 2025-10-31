<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
{
    $pet = Pet::all();
    return view('admin.pet.index', compact('pet'));
}
}