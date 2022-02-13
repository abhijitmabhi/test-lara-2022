<?php
/**
* @OA\Schema(
*     title="Student",
*     description="Student model",
*     @OA\Xml(
*         name="Student"
*     )
* )
*/
class Student
{

/**
* @OA\Property(
*     title="studentId",
*     description="studentId",
* )
*
* @var string
*/
    public $studentId;

/**
* @OA\Property(
*      title="FullName",
*      description="Full name of student",
* )
*
* @var string
*/
    public $fullName;

/**
* @OA\Property(
*      title="email",
*      description="Email of student",
* )
*
* @var string
*/
    public $email;



/**
* @OA\Property(
*     title="address",
*     description="address",
* )
*
* @var string
*/
    public $address;

/**
* @OA\Property(
*     title="Age",
*     description="Student age's user model"
* )
*
* @var string
*/
    public $age;
}
