<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('backoffice.bo.indexAbout',compact('about'));
    }
    public function create(){
        return view('backoffice.bo.createAbout');
    }

    public function store(Request $request){
        request()->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "birthday"=>["required", "date"],
            "website"=>["required"],
            "phone"=>["required", "numeric"],
            "city"=>["required"],
            "age"=>["required", "integer"],
            "degree"=>["required"],
            "email"=>["required", "email"],
            "freelance"=>["required"],
        ]);

        
        
        
    }
    //delete
    public function destroy(About $id){
        $id->delete();
        return redirect()->route('about.index');
    }
    //edit
    public function edit(About $id){
        $about = $id;
        return view ('backoffice.about.editAbout', compact('about'));
    }

    public function update(About $id, Request $request){
        request()->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "birthday"=>["required", "date"],
            "website"=>["required"],
            "phone"=>["required", "numeric"],
            "city"=>["required"],
            "age"=>["required", "integer"],
            "degree"=>["required"],
            "email"=>["required", "email"],
            "freelance"=>["required"],
        ]);
        
    }
    //show
    public function show(About $id){
        $about = $id;
        return view('backoffice.about.showAbout',compact('about'));
    }

}
