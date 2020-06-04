<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;
class EmployeeController extends Controller
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
        $companies = Company::all();
        return view('employees.create')->withCompanies($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required|min:3|max:40',
            'lastname'=>'required|min:3|max:40',
            'email'=>'required|email',
            'phone'=>'required',
            'company_id'=>'required'
        ]);
        $company = Company::all();
        $employee = new Employee;

        $employee->firstname = $request->firstname;
        $employee->lastname = $request->firstname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company_id;

        $employee->save();
        //return redirect()->route('home')->with('success','New employee added to '.$employee->company->name);
        return redirect()->route('companies.show',$employee->company->id)->with('success','New employee added'
            );
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
        $employee = Employee::find($id);
        $companies = Company::all();
        return view('employees.edit')->withEmployee($employee)->withCompanies($companies);
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
        $this->validate($request, [
            'firstname'=>'required|min:3|max:40',
            'lastname'=>'required|min:3|max:40',
            'email'=>'required|email',
            'phone'=>'required',
            'company_id'=>'required'
        ]);

        $company = Company::all();
        $employee = Employee::find($id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company_id;

        $employee->save();
        return redirect()->route('companies.show',$employee->company->id)->with('success',$employee->firstname . ' details updated'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $employee = Employee::find($id);
        $company = Company::all();
        $employee->delete();

        return redirect()->route('companies.show',$employee->company->id)->with('success','Employee Deleted');


    }
}
