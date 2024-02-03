<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index(){
        $cast = DB::table('cast')->get();
        
        return view('cast.index', ['cast' => $cast]);
    }
    public function create(){
        return view('cast.create');
    }
    public function store(Request $request){
        //validation
        $request->validate([
            'name' => 'required|min:5',
            'age' => 'required',
            'bio' => 'required'
        ]);
        
        //data insert
        DB::table('cast')->insert([
            'name' => $request["name"],
            'age' => $request["age"],
            'bio' => $request['bio']
        ]);

        //redirecting to index
        return redirect('/cast');
    }
    public function show($id){
        $castById = DB::table('cast')->find($id);
        return view('cast.detail', ['castById' => $castById]);
    }
    public function edit($id){
        $castById = DB::table('cast')->find($id);
        return view('cast.edit', ['castById' => $castById]);
    }
    public function update($id, Request $request){
        //validation
        $request->validate([
            'name' => 'required|min:5',
            'age' => 'required',
            'bio' => 'required'
        ]);
        
        DB::table('cast')
            ->where('id', $id)
            ->update([
                'name' => $request["name"],
                'age' => $request["age"],
                'bio' => $request['bio']
            ]);
        
            return redirect('/cast');
    }
    public function destroy($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
