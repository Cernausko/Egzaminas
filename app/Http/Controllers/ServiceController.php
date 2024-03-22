<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use File;
use Auth;
use Gate;

class ServiceController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $services = Service::paginate(6);
        return view('pages.home', compact('services'));
    }

    public function addService(){
        
        return view('pages.add-service');
    }

    public function storeService(Request $request){
        $validated = $request->validate([
            'title'=>'required|unique:services',
            'address'=>'required',
            'manager'=>'required',
        ]);
        
        Service::create([
            'title'=>request('title'),
            'address'=>request('address'),
            'manager'=>request('manager'),
        ]);
        return redirect('/');
    }

    public function show($id)
    {
        $services = Service::findOrFail($id);
        return view('pages.show-service', compact('services'));
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('pages.edit-service', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'address'=>'required',
            'manager'=>'required',
            

        ]);

        $services = Service::find($id);
        $services->update($request->all());
        return redirect('/')->with('success', 'Įmonė atnaujinta sėkmingai.');
    }

    public function destroy(Service $service){
        $service->delete();
        return redirect('/');
    }

}

