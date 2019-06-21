<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function add()
    {

        return view('add');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rs['name'] = $request->input('name');
        $rs['title']=$request->input('title');
        $rs['content']=$request->input('content');

        /*
        $rs['schoolid'] = $request->input('schoolid');
        $rs['email'] = $request->input('email');
        $rs['password'] = $request->input('password');
        $rs['sex'] = $request->input('sex');
        $rs['xueyuan'] = $request->input('xueyuan');
        $rs['zhuanye'] = $request->input('zhuanye');
        $rs['shifouhuiyuan'] = $request->input('shifouhuiyuan');
        */
        $rs['info'] = 'success';
        return response($rs,'200');
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
