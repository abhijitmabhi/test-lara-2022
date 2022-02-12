<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;


class StudentController extends Controller
{
    /**
     * @OA\Get (
     * path="/",
     * summary="Student",
     * description="Get Student Information",
     * operationId="studentShow",
     * tags={"student"},
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *    @OA\JsonContent(
     *       @OA\Property(property="fullName", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */

    public function index()
    {
        $studentList = Student::all();

//        return $studentList;

        return \view('welcome',['studentList' => $studentList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return \view('studentAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());

        return redirect('/');
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
