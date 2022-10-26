<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()// __Invoke se utiliza cuando se solo va a utilizar una sola ruta.
    {
        $courses = Course::where('status', 3)->paginate();
        return view('welcome', compact('courses')); 
    }
}
