<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    //Create Api -POST
    public function createEmpolyee(Request $request)
    {
        // validation
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "phone_no"=>"required",
            "gender"=>"required",
            "age"=>"required"
        ]);

        //create data

        //sen response

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
