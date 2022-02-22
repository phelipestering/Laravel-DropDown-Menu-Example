<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function getQualifications()
    {
        $qualifications = DB::table('qualifications')->pluck("discipline", "id");
        
        return view ('dropdown', compact('qualifications'));
    }
}
