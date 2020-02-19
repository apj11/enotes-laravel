<?php

namespace App\Http\Controllers\Admin;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $event = Event::all();
    return view('admin.event.index')
    ->with('event',$event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'venue'=>'required',
            'time'=>'required',
            'date'=>'required',
        ]);
        $event = new Event();
        $event->title=$request->get('title');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $event->image = '/uploads/topwide/'.$image_new_name;

        }
        $event->description=$request->get('description');
        $event->venue=$request->get('venue');
        $event->time=$request->get('time');
        $event->date=$request->get('date');

        $event->save();
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
        $event = Event::find($id);
        return view('admin.event.edit')->with('event',$event);
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
            'venue'=>'required',
            'time'=>'required',
            'date'=>'required',
        ]);
        $event =Event::find($id);

        if($id)
        {
        $event->title=$request->get('title');
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_new_name=time().$image->getClientOriginalName();
                $destination='uploads/topwide';
                $image->move($destination,$image_new_name);
                $event->image = '/uploads/topwide/'.$image_new_name;

        }
        $event->description=$request->get('description');
        $event->venue=$request->get('venue');
        $event->time=$request->get('time');
        $event->date=$request->get('date');
    }
        $event->save();
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
        $event=Event::find($id);
        $event->delete();
        return back()->with('success','Data has been deleted successfully');
//        return '#event'.$id;
    }
}
