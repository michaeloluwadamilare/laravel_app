<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PollingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polling_units = \DB::select('select * from polling_unit');
        return view('polling_units',['polling_units'=>$polling_units]);
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
        $this->validate($request, [
            'lga' => 'required', 'ward'=>'required', 'polling_unit' => 'required','polling_desc'=> 'required'
        ]);
        $party = \DB::select('select * from party');


        $polling_unit = $request->input('polling_unit');
        $lga = $request->input('lga');
        $ward = $request->input('ward');
        $polling_desc =$request->input('polling_desc');
        $party_abb =$request->input('party_abb');
        $ipAddress = $request->ip();
        $data= array('polling_unit_name'=>$polling_unit,"ward_id"=>$ward,"lga_id"=>$lga,"polling_unit_description"=>$polling_desc,'polling_unit_id'=>1);
        $p_u = \DB::table('polling_unit')->insertGetId($data);

        foreach($party_abb as $key => $p){
            $partyscore = $request->input('partyscore')[$key] ? $request->input('partyscore')[$key] : 0;
            $p_abbr = $p;

            $data_= array('polling_unit_uniqueid'=>$p_u,"party_abbreviation"=>$p_abbr,"party_score"=>$partyscore,"entered_by_user"=>'Admin','date_entered'=>date('Y-m-d H:i:s'),'user_ip_address'=>$ipAddress);
           $inserted = \DB::table('announced_pu_results')->insert($data_);
        }
        
        
        if($inserted && $p_u){
            echo "Record inserted successfully.<br/>";
        }else{
            echo "Error!.<br/>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \DB::select('select * from polling_unit inner join announced_pu_results ON polling_unit.uniqueid=announced_pu_results.polling_unit_uniqueid where uniqueid ='.$id );
        return view('polling_units_result',['pu_result'=>$data]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pollsave()
    {
        $ward = \DB::select('select * from ward');
        $party = \DB::select('select * from party');
        $lga = \DB::select('select * from lga');
        return view('pollsave',['wards'=>$ward, 'parties'=>$party, 'lgas'=>$lga]);
    }
}
