<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Resources\Educations as EducationsResource;
use App\Http\Resources\Education as EducationResource;
//
//use App\Http\Resources\EducationCollection;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
//        $edu = EducationResource::collection(Education::all());
//        return $edu->->transform(function($edu){
//            return [
//                'type' => 'education',
//                'id' => $edu->id,
//                'attributes' => [
//                    'name'  => $edu->name
//                ]
//            ];
//    });
       return EducationsResource::collection(Education::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new EducationResource(Education::find($id));
    }

}
