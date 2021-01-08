<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Register;
use Auth;

class FrontpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();
        // dd($posts);
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
        if(Auth::check()){
            $post=Post::find($id);
        $register = Register::where(['user_id'=>Auth::user()->id,'post_id' => $id])->get();
       
        $registercount = count($register);
        return view('frontpage',compact('post','registercount'));
    }else{
        $post=Post::find($id);
        $registercount = 0;
       

        return view('frontpage',compact('post','registercount'));
    }

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

    public function history($id)
    {

        $history = DB::table('registers')
            ->join('users', 'registers.user_id', '=', 'users.id')
            ->join('posts', 'registers.post_id', '=', 'posts.id')
            ->where('registers.user_id','=',$id)
            ->select('registers.*', 'users.name as username','posts.*')
            ->get();
            //dd($registers);

            

            return view ('history',compact('history'));

    }
}
