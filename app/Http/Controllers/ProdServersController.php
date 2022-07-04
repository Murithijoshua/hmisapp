<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prodServers;

class ProdServersController extends Controller
{
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
        return view('resources.prod.create');
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
        //
        $storeData = $request->validate([
            'ServerName' => 'required|max:255',
            'url'=>'required|max:255',
            'githubLinks' => 'required|max:255'
        ]);
        $prodData = prodServers::create($storeData);
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
        $data = prodServers::findOrFail($id);
        return view('resources.prod.edit', compact('data'));
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
            'ServerName' => 'required|max:255',
            'url'=>'required|max:255',
            'githubLinks' => 'required|max:255'
        ]);
        prodServers::whereId($id)->update($updateData);
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
        $prodData = prodServers::findOrFail($id);
        $prodData->delete();
        return redirect('/')->with('completed', 'Entry has been deleted');
    }
}
