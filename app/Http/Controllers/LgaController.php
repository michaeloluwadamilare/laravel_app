<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lgas = \DB::select('select * from lga');
        return view('lga',['lgas'=>$lgas]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {
        $this->validate($request, [
            'lga' => 'required'
        ]);
        $id = $request->input('lga');
        $data = \DB::select('select * from polling_unit inner join lga ON polling_unit.lga_id=lga.lga_id inner join announced_pu_results ON polling_unit.uniqueid = announced_pu_results.polling_unit_uniqueid where polling_unit.lga_id ='.$id );
        return view('lga_result',['lga_result'=>$data]);
       
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
