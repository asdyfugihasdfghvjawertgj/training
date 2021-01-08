<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Course;
use App\Post;
use App\Register;
use Auth;


class PostController extends Controller
{
    public function __construct(){

        $this->middleware(['role:admin']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();
        return view('post.index',compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $courses=Course::all();
        return view('post.create',compact('courses'));
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
        //  $request->validate(['name'=>'required|min:5',
        //                      'course'=>'required',
        //                     'price'=>'required',
        //                     'time'=>'require',
        //                     'room'=>'require',
        //                     'photo'=>'required',
        //                     'start_date'=>'required',
        //                     'end_date'=>'required',
        //                     'description'=>'required|min:10'


        //     ]);

        // //file upload
        if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=time().'.'.$photo->getClientOriginalExtension();
            //or(    $name=time();                            )
            //or(    $name=$photo->getClientOriginalName();   )
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;
        }
        else{
            $photo='';
        }



        //data insert
        $post=new Post();
        $post->name=request('name');
        $post->course_id=request('course');
        $post->price=request('price');
        $post->time=request('time');
        $post->room_no=request('room');
        $post->image=$photo;
        $post->start_date=request('start_date');
        $post->end_date=request('end_date');
        $post->description=request('description');

        
        //$post->user_id=Auth::id();
        //$post->status=true;     (example)

        $post->save();

        //redirect
        return redirect()->route('post.index');//firstpage=>route name
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
        $post=Post::find($id);
        return view('post.detail',compact('post'));
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
        $post=Post::find($id);//for old value
        $courses=Course::all();

        return view('post.edit',compact('courses','post'));
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
        //  $request->validate(['name'=>'required|min:5',
        //                      'course'=>'required',
        //                     'price'=>'required',
        //                     'time'=>'require',
        //                     'room'=>'require',
        //                     'photo'=>'required',
        //                     'start_date'=>'required',
        //                     'end_date'=>'required',
        //                     'description'=>'required|min:10'


        //     ]);

        // //file upload
        if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=time().'.'.$photo->getClientOriginalExtension();
            //or(    $name=time();                            )
            //or(    $name=$photo->getClientOriginalName();   )
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;
        }
        else{
            $photo=request('oldphoto');
        }



        //data insert
        $post=Post::find($id);
        $post->name=request('name');
        $post->course_id=request('course');
        $post->price=request('price');
        $post->time=request('time');
        $post->room_no=request('room');
        $post->image=$photo;
        $post->start_date=request('start_date');
        $post->end_date=request('end_date');
        $post->description=request('description');

        
        //$post->user_id=Auth::id();
        //$post->status=true;     (example)

        $post->save();

        //redirect
        return redirect()->route('post.index');//firstpage=>route name
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
         $post=Post::find($id);
        $post->delete();
        //redirect
        return redirect()->route('post.index');
    }

    public function record($id){
         $records = DB::table('registers')
            ->join('users', 'registers.user_id', '=', 'users.id')
            ->join('posts', 'registers.post_id', '=', 'posts.id')
            ->join('courses','posts.course_id','=','courses.id')
            ->where('registers.post_id', '=', $id)
            ->select('registers.*', 'users.*')
            ->get();

            //dd($records);
            return view('post.record',compact('records'));
    }
}
