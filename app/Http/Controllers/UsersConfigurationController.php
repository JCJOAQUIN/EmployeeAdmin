<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\User;

class UsersConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('configuration/users/users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuration/users/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users                      =   new App\Models\User();
        $users->name                =   $request->name;
        $users->last_name           =   $request->lastName;
        $users->second_last_name    =   $request->secondLastName;
        $users->gender              =   $request->gender;
        $users->birthday            =   $request->birthday;
        $users->curp                =   $request->curp;
        $users->rfc                 =   $request->rfc;
        $users->nss                 =   $request->nss;
        $users->phone               =   $request->phone;
        $users->email               =   $request->email;
        $users->state               =   $request->state;
        $users->township            =   $request->township;
        $users->city                =   $request->city;
        $users->postal_code         =   $request->zip;
        $users->address             =   $request->address;
        $users->user                =   $request->user;
        $users->user_kind           =   $request->userKind;
        $users->password            =   $request->password;
        $users->save();
        $alert = "swal('', 'User successfully registered', 'success');";
        return redirect()->route('users.search')->with('alert',$alert);
    }
    public function search(Request $request)
    {
        $user   =   $request->user;
        $name   =   $request->name;
        $gender =   $request->gender;
        $state  =   $request->state;
        $nss    =   $request->nss;
        $type   =   $request->type;
        $requests   =   App\Models\User::where(function($query) use ($user, $name, $gender, $state, $nss, $type)
        {
            if ($user!="")
            {
                $query->where('user','like','%'.$user.'%');
            }
            if ($name!="")
            {
                $query->where('name','like','%'.$name.'%');
            }
            if ($gender!="")
            {
                $query->where('gender','like','%'.$gender.'%');
            }
            if ($state!="")
            {
                $query->where('state','like','%'.$state.'%');
            }
            if ($nss!="")
            {
                $query->where('nss','like','%'.$nss.'%');
            }
            if ($type == '0')
            {
                $query->where('user_kind',$type);
            }
            if ($type=='1')
            {
                $query->where('user_kind',$type)
                ->orWhere('user_kind',null);
            }
        })
        ->orderBy('id','DESC')
        ->paginate(10);
        return view('configuration/users/search',
        [
            'requests'  =>  $requests,
            'user'      =>$user,
            'name'      =>$name,
            'gender'    =>$gender,
            'state'     =>$state,
            'nss'       =>$nss,
            'type'      =>$type
        ]);
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
        $requestUser    =   App\Models\User::find($id);
        return view('configuration/users/register',['requests'=>$requestUser]);
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
        $usersUpdate                      =   App\Models\User::find($id);
        $usersUpdate->name                =   $request->name;
        $usersUpdate->last_name           =   $request->lastName;
        $usersUpdate->second_last_name    =   $request->secondLastName;
        $usersUpdate->gender              =   $request->gender;
        $usersUpdate->birthday            =   $request->birthday;
        $usersUpdate->curp                =   $request->curp;
        $usersUpdate->rfc                 =   $request->rfc;
        $usersUpdate->nss                 =   $request->nss;
        $usersUpdate->phone               =   $request->phone;
        $usersUpdate->email               =   $request->email;
        $usersUpdate->state               =   $request->state;
        $usersUpdate->township            =   $request->township;
        $usersUpdate->city                =   $request->city;
        $usersUpdate->postal_code         =   $request->zip;
        $usersUpdate->address             =   $request->address;
        $usersUpdate->user                =   $request->user;
        $usersUpdate->user_kind           =   $request->userKind;
        $usersUpdate->password            =   $request->password;
        $usersUpdate->save();
        $alert = "swal('', 'User successfully registered', 'success');";
        return redirect()->route('users.search')->with('alert',$alert);
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
