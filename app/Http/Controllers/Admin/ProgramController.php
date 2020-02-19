<?php

namespace App\Http\Controllers\Admin;
use App\Program;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program=Program::all();
        $category = Category::all();
        return view('admin.program.index')
            ->with('program',$program)
            ->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return  view ('admin.program.create')
            ->with('category',$category);
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
            'category_id'=>'required',
            'title'=>'required',
            'semester'=>'required',
            'date'=>'required',
            'subject'=>'required',
            'file'=>'required',
        ]);

        $program=new Program();
        $program->category_id=$request->get('category_id');
        $program->title=$request->get('title');
        $program->semester=$request->get('semester');
        if($request->hasFile('file'))
        {
            $file=$request->file('file');
            $file_new_name=time().$file->getClientOriginalName();
            $destination='uploads/topwide';
            $file->move($destination,$file_new_name);
            $program->file = '/uploads/topwide/'.$file_new_name;
        }

        $program->subject=$request->get('subject');
        $program->date=$request->get('date');
        $program->save();
        return back()->with('success','data added Successfully');
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
        $category=Category::all();
        $program = Program::find($id);
        return view('admin.program.edit')->with('program',$program)
            ->with('category',$category);
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
            'category_id'=>'required',
            'title'=>'required',
            'semester'=>'required',
            'date'=>'required',
            'subject'=>'required',
            'file'=>'required',
        ]);

        $program=Program::find($id);
        if ($id)
        {
            $program->category_id = $request->get('category_id');
            $program->title = $request->get('title');
            $program->semester = $request->get('semester');
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_new_name = time() . $file->getClientOriginalName();
                $destination = 'uploads/topwide';
                $file->move($destination, $file_new_name);
                $program->file = '/uploads/topwide/' . $file_new_name;
            }
        }
        $program->subject=$request->get('subject');
        $program->date=$request->get('date');
        $program->save();
        return back()->with('success','data added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
