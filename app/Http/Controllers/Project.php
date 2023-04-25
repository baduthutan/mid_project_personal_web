<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class Project extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = projects::get();

        // return view('project')->with(['projects' => $data]);
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
            'link'=> $request->link,
            'detail'=>$request->dt,     
            'picture'=>$request->img
          ];
          Projects::create($data1);
        //   error_log($request->nm);
          return redirect('/project')->with('status', $request->nm. ' berhasil ditambahkan');
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
        $data = Projects::where('ID','=',$id)->update([
            'name' => $request->nm,
            'link'=> $request->link,
            'detail'=>$request->dt,     
            'picture'=>$request->img
        ]);
        return redirect('/project')->with('status', $request->nm. ' berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Projects::where('ID','=',$id)->delete();
        return redirect('/project')->with('status', $id.' has been deleted!');
    }
}
