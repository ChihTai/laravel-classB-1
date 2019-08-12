<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Title;

class TitleCT extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Title::all();

        return view('admin',['main'=>'title',"rows"=>$rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.add.title");
    }


    public function updateImg($id)
    {
        return view("admin.update.title",["cid"=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        if($request->hasFile("file")){
            if($request->file("file")->isValid()){
                $filename=$request->file("file")->getClientOriginalName();
                $request->file("file")->storeAs("img",$filename,"public");
                $input['file']=$filename;
                $input['sh']="";
            }
        }
           Title::create($input);
        return redirect("/admin/title");
        

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
