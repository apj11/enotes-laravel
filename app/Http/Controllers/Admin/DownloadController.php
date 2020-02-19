<?php

namespace App\Http\Controllers\Admin;
use App\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download =Download::all();
        return view('admin.download.index')->with('download',$download);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'date'=>'date',
            'file'=>'file',
        ]);
        $download=new Download();
        $download->title=$request->get('title');
        $download->description=$request->get('description');
        $download->date=$request->get('date');
        if($request->hasFile('file')){
            $file=$request->file('file');
            $file_new_name=time().$file->getClientOriginalName();
            $destination='uploads/topwide';
            $file->move($destination,$file_new_name);
            $download->file = '/uploads/topwide/'.$file_new_name;
        }

        $download->save();
        return back()->with('success','Data added successfully');

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
        $download =Download::find($id);
        return view ('admin.download.edit')->with('$download',$download);
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
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'date'=>'date',
            'file'=>'file',
        ]);

        $download=Download::find($id);
            if ($id)
            {
                $download->title=$request->get('title');
                $download->description=$request->get('description');
                $download->date=$request->get('date');
                if($request->hasFile('file')){
                $file=$request->file('file');
                $file_new_name=time().$file->getClientOriginalName();
                $destination='uploads/topwide';
                $file->move($destination,$file_new_name);
                $download->file = '/uploads/topwide/'.$file_new_name;
            }
        }

        $download->save();
        return back()->with('success','Data added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download= Download::find($id);
        $download->delete();
        return back()->with('success','Data has been added successfully');
//        return '#download'.$id;
    }
}
