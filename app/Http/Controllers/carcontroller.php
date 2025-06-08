<?php

namespace App\Http\Controllers;

use App\Models\carsModel;
use Illuminate\Http\Request;

class carcontroller extends Controller
{
    public function create(){

        return view('create');

    }
    public function index(){
        $table = carsModel::where('status','Active')->orderBy('id','Desc')->get();

        return view('index',compact('table'));
    }

    public function store(Request $request){
        carsModel::create([
            'colors' => $request->input('colors'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'model' => $request->input('model'),
            'company' => $request->input('company'),
            'manufacturing_date' => $request->input('manufacturing_date'),
        ]);
        return redirect()->route('vehicles.index')->with('success','vehicles created successfuly');
    }
    public function edit($id){
        $table = carsModel::where('id',$id)->first();

        return view('edit',compact('table'));
    }

    public function update(Request $request,$id){
        $input = $request->all();
        $table = carsModel::findOrFail($id);

        $table->update([
            'colors' => $request->input('colors'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'model' => $request->input('model'),
            'company' => $request->input('company'),
            'manufacturing_date' => $request->input('manufacturing_date'),
        ]);
        return redirect()->route('vehicles.index')->with('success','car updated successfully');
    }
    public function delete(Request $request, $id){
        $table = carsModel::findOrFail($id);
        $table->update([
            'status' => 'Deleted'
        ]);
        return redirect()->route('vehicles.index')->with('success','car deleted successfully');
    }

}
