<?php

namespace App\Http\Controllers;

use App\Basic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\Basic as BasicResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Basic  $basic
     * @return \Illuminate\Http\Response
     */
    public function show(Basic $basic)
    {
        //
        return new BasicResource(Basic::find(1));
    }

}
