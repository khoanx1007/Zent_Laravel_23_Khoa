<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function index()
    {
        Storage::disk('local')->put('file.txt','Contents');
        return view('backend.dashboard');
    
    }
}
