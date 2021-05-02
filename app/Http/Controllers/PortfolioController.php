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
        request()->validate([
            "filter"=>["required"],
            "lien"=>["required"],
            "titre"=>["required"],
        ]);
        
        
        $portfolio = new Portfolio();
        $request->file('lien')->storePublicly('img/portfolio/','public');
        $portfolio->lien = $request->file('lien')->hashName();
        
        
        $portfolio->titre = $request->titre;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'Projet rajouter');
    }


    //delete
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('portfolio.index')->with('warning', 'projet supprimé!');
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
        if($request->file('lien') != null) {
            //storage
            // Storage::disk('public')->delete('img/portfolio/'.$id->lien);
            $request->file('lien')->storePublicly('img/portfolio/','public');
            //db
            $portfolio->lien = $request->file('lien')->hashname();
        }
        $portfolio->titre = $request->titre;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'projet édité');
    }

    //show
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('backoffice.bo.portfolio.showPortfolio',compact('portfolio'));
    }
}
