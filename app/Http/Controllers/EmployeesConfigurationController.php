<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\User;
use App\Models\Employee;
use RealRashid\SweetAlert\Facades\Alert;


class EmployeesConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('configuration/employees/employees');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuration/employees/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee               = new   App\Models\Employee();
        $employee->clabe        = $request->clabe;
        $employee->alias        = $request->alias;
        $employee->userId       = $request->user;
        $employee->area         = $request->area;
        $employee->department   = $request->department;
        $employee->password     = $request->password;
        $employee->save();
        Alert::success('', 'Employee registered successfully with the clabe number: '.$employee->clabe.'!');
        return redirect()->route('employees.search');
    }

    function view(Request $request, $id)
    {
        $requestUser    =   App\Models\Employee::find($id);
        return view('configuration/employees/employeeInformation',['requests'=>$requestUser]);
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
        $requestEmployee    =   App\Models\Employee::find($id);
        return view('configuration/employees/create',['requests'=>$requestEmployee]);
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
        $employee               = App\Models\Employee::find($id);
        $employee->clabe        = $request->clabe;
        $employee->alias        = $request->alias;
        $employee->userId       = $request->user;
        $employee->area         = $request->area;
        $employee->department   = $request->department;
        $employee->password     = $request->password;
        $employee->save();
        Alert::success('', 'Employee updated successfully');
        return redirect()->route('employees.search');
    }

    public function active($id)
    {
        $employee = App\Models\Employee::onlyTrashed()->find($id);
        $employee->restore();
        Alert::success('','Employee restored successfully!');
        return redirect()->route('employees.search');
    }
    public function suspend($id)
    {
        $employee = App\Models\Employee::find($id);
        $employee->delete();
        Alert::success('','Employee suspended successfully!');
        return redirect()->route('employees.search');
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

    public function search(Request $request)
    {
        // return $request;
        $clabe          = $request->clabe;
        $alias          = $request->alias;
        $user           = $request->user;
        $area           = $request->area;
        $name           = $request->name;
        $department     = $request->department;
        $requestName    = App\Models\Employee::where('name','like','%'.$name.'%');

        $requests = App\Models\Employee::where(function($query) use ($clabe, $alias, $user, $area, $name, $department)
        {
            if ($clabe!="")
            {
                $query->where('clabe','like','%'.$clabe.'%');
            }
            if ($alias!="")
            {
                $query->where('alias','like','%'.$alias.'%');
            }
            if ($user!="")
            {
                $query->where('userId','like','%'.$user.'%');
            }
            if ($area!="")
            {
                $query->where('area','like','%'.$area.'%');
            }
            if ($name!="")
            {
                // $query->where('name','like','%'.$name.'%');
                $query->whereHas('requestUser', function($queryU) use($name)
                {
                    $queryU->where(DB::raw("CONCAT_WS(' ',users.name,users.last_name,users.second_last_name)"),'LIKE','%'.preg_replace("/\s+/", "%", $name).'%');
                });
            }
            if ($department!="")
            {
                $query->where('department','like','%'.$department.'%');
            }
        })
        ->withTrashed()
        ->orderBy('id','DESC')
        ->paginate(10);
        return view('configuration/employees/search',
        [
            'requests'      => $requests,
            'clabe'         => $clabe,
            'alias'         => $alias,
            'user'          => $user,
            'area'          => $area,
            'name'          => $name,
            'department'    => $department
        ]);
    }

    public function getUser(Request $request)
    {
        if($request->ajax())
		{
			$users 	= User::where('id',$request->userId)->get();
			if (count($users) > 0)
			{
                $nameUser = "";
                foreach ($users as $user)
                {
                    $nameUser  =   $user->fullName();
                }
				return Response($nameUser);
			}
		}
    }
}
