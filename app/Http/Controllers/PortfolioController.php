<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

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
        //champs obligatoire
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        //mettre dans la db
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    //delete
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('portfolio.index');
    }

    //edit
    public function edit(Portfolio $id){
        $portfolio = $id;
        return view ('backoffice.bo.portfolio.editPortfolio', compact('portfolio'));
    }

    public function update(Portfolio $id, Request $request){
        //champs obligatoire
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);

        //mettre dans la db
        $portfolio = $id;
        $portfolio->filter = $request->filter;
        $portfolio->lien = $request->lien;
        $portfolio->titre = $request->titre;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    //show
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.bo.portfolio.showPortfolio',compact('portfolio'));
    }
}
