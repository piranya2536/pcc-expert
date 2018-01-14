<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expertise;
use App\Models\Major;

class ApiController extends Controller
{
    public function expertiseFromMajor(Request $request) {
        $major_id = $request->get('major_id');
        $major = Major::find($major_id);
        $expertises = Expertise::where('major_code', $major->major_code)->orderBy('id')->get();
        return response()->json($expertises);
    }
}