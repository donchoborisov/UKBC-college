<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Course;

class SearchController extends Controller
{
    public function results(Request $request) {
        $this->validate($request,[
            'search' => 'required|max:20'
        ]);
        $keyword = $request->get('search');

        if($keyword) {

            $courses = Course::where('title','LIKE','%'.$keyword.'%')->paginate(10);
            
             
            
            return view('pages.results',compact('courses'));
        } 
        

    }
}
