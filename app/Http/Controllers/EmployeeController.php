<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employee = Employee::all();
        return view('list_employes', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_employee');
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
            'nip' => 'required|unique:employees,nip',
            'full_name' => 'required',
            'email' => 'required',
            'birth' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'salary' => 'required|integer',
        ]);

        $nip = $request->nip;
        $full_name = $request->full_name;
        $email = $request->email;
        $birth = $request->birth;
        $phone = $request->phone;
        $address = $request->address;
        $salary = $request->salary;

        Employee::create([
            'nip' => $nip,
            'full_name' => $full_name,
            'email' => $email,
            'birth' => $birth,
            'phone' => $phone,
            'address' => $address,
            'salary' => $salary,
        ]);

        return redirect('/')->with('alert-success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = DB::table('employees')->where('id', $id)->get();
        return view('detail_employee', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = DB::table('employees')->where('id', $id)->get();
        return view('edit_employee', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->nip = $request->nip;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->birth = $request->birth;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('/')->with('alert-success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/')->with('alert-success', 'Data berhasil dihapus!');
    }
}
