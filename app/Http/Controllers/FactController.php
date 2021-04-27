<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $facts = Fact::all();
        return view('backoffice.bo.fact.indexFact',compact('facts'));
    }

    public function create(){
        return view('backoffice.bo.fact.createFact');
    }

    public function store(Request $request){
        
        request()->validate([
            "happy"=>["required"],
            "project"=>["required", "integer"],
            "support"=>["required"],
            "work"=>["required"],
        ]);

        
        $fact = new Fact();
        $fact->happy = $request->happy;
        $fact->project = $request->project;
        $fact->support = $request->support;
        $fact->work = $request->work;
        $fact->save();
        return redirect()->route('fact.index');
    }

    //delete
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->route('fact.index');
    }

    //edit
    public function edit(Fact $id){
        $fact = $id;
        return view ('backoffice.bo.fact.editFact', compact('fact'));
    }

    public function update(Fact $id, Request $request){
        
        request()->validate([
            "happy"=>["required"],
            "project"=>["required", "integer"],
            "support"=>["required"],
            "work"=>["required"],
        ]);

        
        $fact = $id;
        $fact->happy = $request->happy;
        $fact->project = $request->project;
        $fact->support = $request->support;
        $fact->work = $request->work;
        $fact->save();
        return redirect()->route('fact.index');
    }

    //show
    public function show(Fact $id){
        $fact = $id;
        return view('backoffice.bo.fact.showFact',compact('fact'));
    }
}
