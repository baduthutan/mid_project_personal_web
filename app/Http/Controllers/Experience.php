<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiences;
use App\Http\Controllers\ApiRule;

class Experience extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Experiences::get();

        // return view('experience')->with(['experiences' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data1 = [
            'name' => $request->nm,
            'date'=> $request->date,
            'detail'=>$request->dt,     
            'picture'=>$request->img
          ];
          Experiences::create($data1);
          return redirect('/experience')->with('status', $request->nm. ' berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Experiences::where('ID','=',$id)->update([
            'name' => $request->nm,
            'date'=> $request->date,
            'detail'=>$request->dt,     
            'picture'=>$request->img
        ]);
        return redirect('/experience')->with('status', $request->nm. ' berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Experiences::where('ID','=',$id)->delete();
        return redirect('/experience')->with('status', $id.' has been deleted!');
    }
}
