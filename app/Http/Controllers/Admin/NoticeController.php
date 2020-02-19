<?php

namespace App\Http\Controllers\Admin;
use App\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice=Notice::all();
        return view('admin.notice.index')->with('notice',$notice);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
        'date'=>'required',
        'description'=>'required',
        ]);
            $notice= new Notice();
            $notice->date=$request->get('date');
            $notice->description=$request->get('description');

            $notice->save();
            return back()->with('success','Data submitted Successfully');
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
        $notice=Notice::find($id);
        return view('admin.notice.edit')->with('notice',$notice);
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
            'date'=>'required',
            'description'=>'required',
            ]);
            
                $notice= Notice::find($id);

                if($id)
                {
                $notice->date=$request->get('date');
                $notice->description=$request->get('description');
                }
                $notice->save();
                return back()->with('success','Data submitted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice=Notice::find($id);
        $notice->delete();
        return back()->with('success','Data has been deleted Successfully');
        // return'#notice'.$id;
    }
}
