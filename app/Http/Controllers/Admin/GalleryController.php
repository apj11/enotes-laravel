<?php

namespace App\Http\Controllers\Admin;
use App\Gallery;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $category=Category::all();
    $gallery= Gallery::all();
       return view('admin.gallery.index')
       ->with('category',$category)
       ->with('gallery',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $category=Category::all();
        return view('admin.gallery.create')->with('category',$category);
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
            'image'=>'required',
            'category_id'=>'required'

            
        ]);
        $gallery =new Gallery();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $gallery->image = '/uploads/topwide/'.$image_new_name;
        }
        $gallery->category_id=$request->get('category_id');
       

        $gallery->save();
        return back()->with('success','Data has been added successfully');
    

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
        $category=category::all();
        $gallery=Gallery::find(id);
        return view('admin.gallery.edit')->with('category',$category)
        ->with('gallery',$gallery);
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
            'image'=>'required',
            'category_id'=>'required'
            
        ]);
        $gallery =Gallery::find($id);
        if($id)
        {
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $gallery->image = '/uploads/topwide/'.$image_new_name;
        }
        $gallery->category_id=$request->get('category_id');
    }

        $gallery->save();
        return back()->with('success','Data has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=Gallery::find($id);
        $gallery->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
