<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject_Strands;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjectstrand = Subject_Strands::all();
    	return view('subjects.index')->with('subjectstrand', $subjectstrands);
    }
    public function create()
    {
    	return view('subjectsstrand.create');
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$subjectstrands = new Subject_Strands;
    	$subjectstrands->name = request()->name;
        $subjectstrands->semester = request()->semester;
        $subjectstrands->grade_level = request()->grade_level;
    	$subjectstrands->save();

    	return redirect('/subject-strands');
    }
}
