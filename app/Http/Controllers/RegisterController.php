<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Register;
use App\Post;
use App\Course;
use Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $registers = DB::table('registers')
            ->join('users', 'registers.user_id', '=', 'users.id')
            ->join('posts', 'registers.post_id', '=', 'posts.id')
            ->join('courses','posts.course_id','=','courses.id')
            ->select('registers.*', 'users.name as username','posts.name as postname','courses.name as coursename')
            ->get();

            //dd($registers);

            

            return view ('record',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     // * Store a newly created resource in storage.
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
     // */
    public function store(Request $request)
    {
        //
        // dd($request);
        $date = date('y-m-d');
        //dd($date);        
        $register=new Register();
        $register->user_id=Auth::user()->id;
        $register->post_id=request('register');
        $register->date=$date;
        $register->save();

        return redirect()->back();


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
        // $register=Register::all();

        // return view('register')
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
