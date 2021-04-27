<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('backoffice.bo.services.indexService',compact('services'));
    }

    public function create()
    {
        return view('backoffice.bo.services.createService');
    }

    public function store(Request $request)
    {
        
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        
        $service = new Service();
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index');
    }

    //delete
    public function destroy(Service $id)
    {
        $id->delete();
        return redirect()->route('service.index');
    }

    //edit
    public function edit(Service $id)
    {
        $service = $id;
        return view('backoffice.bo.services.editService', compact('service'));
    }

    public function update(Service $id, Request $request)
    {
        
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        
        $service = $id;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index');
    }

    //show
    public function show(Service $id)
    {
        $service = $id;
        return view('backoffice.bo.services.showService', compact('service'));
    }
}
