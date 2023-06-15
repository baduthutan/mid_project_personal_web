<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
            'picture'=>$request->img,
            'type'=>$request->typ
          ];

          if($path = $request->file('img')->store('toPath',['disk' => 'my_files'])) {
            $data1['picture'] = $path;

          }
          Projects::create($data1);
        //   Storage::put($request->img,file_get_contents($request->file('files')->getRealPath()));
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
            'picture'=>$request->img,
            'type'=>$request->typ
        ]);
        // Storage::put(, $contents);;
        //   error_log($request->nm);
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
