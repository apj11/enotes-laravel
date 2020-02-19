<?php

namespace App\Http\Controllers\Admin;
use App\Teacherdetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherdetail = Teacherdetail::all();
        return view('admin.teacherdetail.index')->with('teacherdetail',$teacherdetail);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacherdetail.create');
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
          $this->validate($request,[

    'name'=>'required',
    'image'=>'required',
    'profession'=>'required',
    'description'=>'required',
    'degree'=>'required',
    'experience'=>'required',
    'faculty'=>'required',
    'email'=>'required |email',
    'phone'=>'required',

        ]);
        $teacherdetail = new Teacherdetail() ;
        $teacherdetail->name =$request->get('name');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $teacherdetail->image = '/uploads/topwide/'.$image_new_name;
         }
        $teacherdetail->profession =$request->get('profession');
        $teacherdetail->description =$request->get('description');

        $teacherdetail->degree=$request->get('degree');
        $teacherdetail->experience =$request->get('experience');
        $teacherdetail->faculty =$request->get('faculty');
        $teacherdetail->email =$request->get('email');
        $teacherdetail->phone =$request->get('phone');
        $teacherdetail->facebook =$request->get('facebook');
        $teacherdetail->instagram =$request->get('instagram');
        $teacherdetail->twitter =$request->get('twitter');

        $teacherdetail->save();
        return back()->with('success','Data submitted successfully');
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
        $teacherdetail =Teacherdetail::find($id);
        return view('admin.teacherdetail.edit')->with('teacherdetail',$teacherdetail);

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

            'name'=>'required',
            'image'=>'required',
            'profession'=>'required',
            'description'=>'required',
            'degree'=>'required',
            'experience'=>'required',
            'faculty'=>'required',
            'email'=>'required |email',
            'phone'=>'required',

                ]);
                $teacherdetail =Teacherdetail::Find($id) ;
                if($id)
                {
                    $teacherdetail->name =$request->get('name');
                    if($request->hasFile('image'))
                    {
                        $image=$request->file('image');
                        $image_new_name=time().$image->getClientOriginalName();
                        $destination='uploads/topwide';
                        $image->move($destination,$image_new_name);
                        $teacherdetail->image = '/uploads/topwide/'.$image_new_name;
                    }
                    $teacherdetail->profession =$request->get('profession');
                    $teacherdetail->description =$request->get('description');

                    $teacherdetail->degree=$request->get('degree');
                    $teacherdetail->experience =$request->get('experience');
                    $teacherdetail->faculty =$request->get('faculty');
                    $teacherdetail->email =$request->get('email');
                    $teacherdetail->phone =$request->get('phone');
                    $teacherdetail->facebook =$request->get('facebook');
                    $teacherdetail->instagram =$request->get('instagram');
                    $teacherdetail->twitter =$request->get('twitter');
                }
                $teacherdetail->save();
                return back()->with('success','Data submitted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacherdetail = Teacherdetail::find($id);
        $teacherdetail->delete();
        return back()->with('success','Data has been deleted successfully');
        // return '#teacherdetail'.$id;
    }
}
