<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('backoffice.bo.skill.indexSkill',compact('skills'));
    }

    public function create(){
        return view('backoffice.bo.skill.createSkill');
    }

    public function store(Request $request){
        
        request()->validate([
            "titre"=>["required"],
            "value"=>["required","numeric"],
        ]);

        
        $skill = new Skill();
        $skill->titre = $request->titre;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('skill.index');
    }

    //delete
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route('skill.index');
    }

    //edit
    public function edit(Skill $id){
        $skill = $id;
        return view ('backoffice.bo.skill.editSkill', compact('skill'));
    }

    public function update(Skill $id, Request $request){
        
        request()->validate([
            "titre"=>["required"],
            "value"=>["required","numeric"],
        ]);

        
        $skill = $id;
        $skill->titre = $request->titre;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('skill.index');
    }

    //show
    public function show(Skill $id){
        $skill = $id;
        return view('backoffice.bo.skill.showSkill',compact('skill'));
    }
}
