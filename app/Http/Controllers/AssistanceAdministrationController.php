<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Assistance;

class AssistanceAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return redirect()->route('assistance.search',["request"=>$request]);
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
    public function show($id)
    {
        //
    }

    public function search(Request $request)
    {
        $name           =   $request->user;
        $timeliness     =   $request->timeliness;
        $check          =   $request->assistanceType;
        $requests = App\Models\Assistance::where(function($query) use ($name,$timeliness,$check)
        {
            if($name!="")
            {
                $query->where('user_id','like','%'.$name.'%');
            }
            if($timeliness!="")
            {
                $query->where('timeliness_id','like','%'.$timeliness.'%');
            }
            if($check==1)
            {
                $query->where('check_in','!=','');
            }
            if($check==2)
            {
                $query->where('check_out','!=','');
            }
        })
        ->orderBy('id','DESC')
        ->paginate(10);
        return view('administration/asistance',
        [
            'requests'      => $requests,
            'name'          => $name,
            'timeliness'    => $timeliness,
            'check'         => $check,
        ]);
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
