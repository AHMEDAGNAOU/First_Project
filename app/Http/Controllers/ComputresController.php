<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputresController extends Controller
{

    // Array of Static Date
    private static function getData(){
        // return [
        //     ['id'=> 1, 'name'=> 'LG', 'origin'=> 'Koria'],
        //     ['id'=> 2, 'name'=> 'HP', 'origin'=> 'USA'],
        //     ['id'=> 3, 'name'=> 'Siemens', 'origin'=> 'Germany'],
        //     ['id'=> 4, 'name'=> 'Lenovo', 'origin'=> 'Franca'],
        // ];
    }

    //___________________________________________________________________________________________
    public function index()
    {
        return view('computres.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Computre-name'=>'required',
            'Computre-origin'=>'required',
            'Computre-price'=>'required|integer',
        ]);

        $computer = new Computer();
        $computer->name = strip_tags($request->input('Computre-name'));
        $computer->origin = strip_tags($request->input('Computre-origin'));
        $computer->price = strip_tags($request->input('Computre-price'));

        $computer->save();

        return redirect()->route('computres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        return view('computres.show', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($computer)
    {
        return view('computres.edit', [
            'computer'=> Computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        $request->validate([
            'Computre-name'=>'required',
            'Computre-origin'=>'required',
            'Computre-price'=>'required|integer',
        ]);

        $to_update = Computer::findOrFail($computer);
        $to_update->name = strip_tags($request->input('Computre-name'));
        $to_update->origin = strip_tags($request->input('Computre-origin'));
        $to_update->price = strip_tags($request->input('Computre-price'));

        $to_update->save();

        return redirect()->route('computres.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer)
    {
        $to_delete = Computer::findOrFail($computer);
        $to_delete -> delete();
        return redirect()->route('computres.index');
        
    }
}
