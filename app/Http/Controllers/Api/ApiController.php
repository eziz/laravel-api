<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class ApiController extends Controller
{
    //Create Api -POST
    public function createEmployee(Request $request)
    {
        // validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:employees",
            "phone_no" => "required",
            "gender" => "required",
            "age" => "required"
        ]);

        //create data
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_no = $request->phone_no;
        $employee->gender = $request->gender;
        $employee->gender = $request->gender;
        //send response

    }

    // List Api- GET
    public function listEmployees()
    {
    }
    // Single Detail APi  -GET
    public function getSingleEmployee($id)
    {
    }
    //Update API -PUT
    public function updateEmployee(Request $request, $id)
    {
    }
    // Delete Api  -DELETE
    public function deleteEmploye($id)
    {
    }
}
