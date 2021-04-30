<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Portfolio::all();
        return view('backoffice.bo.portfolio.indexPortfolio',compact('portfolio'));
    }

    public function create(){
        return view('backoffice.bo.portfolio.createPortfolio');
    }

    public function store(Request $request){
        
        //Storage
        Storage::put('public/img/', $request->file('img'));

        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);


        
        $portfolio = new Portfolio();
        $portfolio->titre = $request->titre;
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->img = $request->file('img')->hashName();
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }


    //delete
    public function destroy(Portfolio $id){
        Storage::delete('public/img/'. $id->img);
        $id->delete();
        return redirect()->route('portfolio.index');
    }

    //edit
    public function edit(Portfolio $id){
        $portfolio = $id;
        return view ('backoffice.bo.portfolio.editPortfolio', compact('portfolio'));
    }

    public function update(Portfolio $id, Request $request){
        
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        
        $portfolio = $id;
        $portfolio->titre = $request->titre;
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    //show
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.bo.portfolio.showPortfolio',compact('portfolio'));
    }
}
