<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function doctors()
    {
         $doctors = User::whereRoleIs('doctor')->get();
         return view('list', compact('doctors'));
    }
    public function doc($id)
    {
         $doctors = User::whereRoleIs('doctor')->findOrFail($id);
         return view('detail-page', ['doc'=>$doctors]);
    }
}