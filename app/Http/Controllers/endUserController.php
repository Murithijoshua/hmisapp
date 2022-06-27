<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\endUser;
class endUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //
        // $endUserData = endUser::all();
        // return view('index', compact('endUserData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resources.endUser.create');
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
        $storeData = $request->validate([
            'HISProductVersion' => 'required|max:255',
            'JobAid' => 'required|max:255',
            'Video' => 'required|max:255',
        ]);
        $totData = endUser::create($storeData);
        return redirect('/')->with('completed', 'Entry has been saved!');
   
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
        $data = endUser::findOrFail($id);
        return view('resources.endUser.edit', compact('data'));
    
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
        $updateData = $request->validate([
            'HISProductVersion' => 'required|max:255',
            'JobAid' => 'required|max:255',
            'Video' => 'required|max:255',
        ]);
        endUser::whereId($id)->update($updateData);
        return redirect('/')->with('completed', 'Entry has  has been updated');
  
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
        $endUserData = endUser::findOrFail($id);
        $endUserData->delete();
        return redirect('/')->with('completed', 'Entry has been deleted');
  
    }
}
