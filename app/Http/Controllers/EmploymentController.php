<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;
use App\Http\Resources\Employments as EmploymentsResource;
use App\Http\Resources\Employment as EmploymentResource;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return EmploymentsResource::collection(Employment::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new EmploymentResource(Employment::find($id));
    }

}
