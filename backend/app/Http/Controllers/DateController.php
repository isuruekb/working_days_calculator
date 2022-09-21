<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;

class DateController extends Controller
{
    //
    public function index(){
        return Date::all();
    }

}
