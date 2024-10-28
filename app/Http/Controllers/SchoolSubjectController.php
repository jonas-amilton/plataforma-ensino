<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    public function create()
    {

        return view('school-subject.create');
    }

    public function manage()
    {
        return view('school-subject.manage');
    }
}