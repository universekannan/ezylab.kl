<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

}
