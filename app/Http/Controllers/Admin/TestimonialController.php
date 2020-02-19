<?php

namespace App\Http\Controllers\Admin;
use App\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial=Testimonial::all();
        return view('admin.testimonial.index')->with('testimonial',$testimonial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'image'=>'required',
            'description'=>'required',
            'name'=>'required',
        ]);
        $testimonial=new Testimonial();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $testimonial->image = '/uploads/topwide/'.$image_new_name;
        }
        $testimonial->title =$request->get('title');
        $testimonial->description =$request->get('description');
        $testimonial->name=$request->get('name');

        $testimonial->save();
        return back()->with('success','Data Added');

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
        $testimonial=Testimonial::find($id);
        return view('admin.testimonial.edit')->with('testimonial'.$testimonial);
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
            'image'=>'required',
            'description'=>'required',
            'name'=>'required',
        ]);
        $testimonial=new Testimonial();
        if ($id)
        {
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $testimonial->image = '/uploads/topwide/'.$image_new_name;
        }
        $testimonial->title =$request->get('title');
        $testimonial->description =$request->get('description');
        $testimonial->name=$request->get('name');
    }
        $testimonial->save();
        return back()->with('success','Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return back()->with('success','Data has been deleted successfully');
        // return '#testimonial'.$id;
    }
}
