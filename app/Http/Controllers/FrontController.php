<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $about = About::all()->first();
        $skills = Skill::all();
        $facts = Fact::All();
        $portfolio = Portfolio::all();
        return view('home', compact('about','skills','facts','portfolio'));
    }

    public function admin(){
        return view('backoffice.admin');
    }
}
