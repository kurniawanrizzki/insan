<?php

namespace App\Http\Controllers\Regis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    //
    public function index () {
        return view("regis.submission");
    }
}
