<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
use App\Models\Service;


class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::paginate(6);
        return view('pages.all-workers', compact('workers'));
    }

    public function addWorker(){
        $services = Service::all();
        return view('pages.add-worker', compact('services'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'specialization'=>'required',
            'city'=>'required',
            'service' => 'required'
        ]);
        //dd($request);
        if(request()->hasFile('picture')){
            $picture = $request->file('picture')->store('public/images');
            $path = str_replace('public/','',$picture);
        }
        Worker::create([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'specialization'=>request('specialization'),
            'city'=>request('city'),
            'picture'=>$path,
            'service'=> request('service'),
        ]);
        return redirect('/');
    }

    public function show($id)
    {
        $workers = Worker::findOrFail($id);
        return view('pages.show-worker', compact('workers'));
    }

    public function edit(Worker $worker){
        $services = Service::all();
        return view('pages.edit-worker', compact('worker', 'services'));
    }
    public function storeUpdate(Worker $worker,Request $request){
        if(request()->hasFile('picture')){
            File::delete(storage_path('app/public/'.$worker->picture));
            $picture = $request->file('picture')->store('public/images');
            $path = str_replace('public/','',$picture);
            Worker::where('id',$worker->id)->update(['picture'=>$path]);
        }
        worker::where('id',$worker->id)->update(
            $request->only(['firstName', 'lastName', 'specialization', 'city', 'service'])
        );

        return redirect('/all-workers');

    }

    public function destroy(Worker $worker){
        $worker->delete();
        return redirect('/');
    }

}
