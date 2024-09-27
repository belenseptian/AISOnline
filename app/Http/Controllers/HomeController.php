<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Sentence;

class HomeController extends Controller
{
    public function index()
    {
        $log = Log::all();

        $parameters = array(
            'log' => $log
        );
        return view('backend.index', $parameters);
    }

    public function menu($names)
    {
        $log = Log::all();

        $parameters = array(
            'name' => $names,
            'log' => $log
        );
        return view('backend.index', $parameters);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'sentence'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // //create post
        // $post = Sentence::create([
        //     'nmea'     => $request->sentence,
        // ]);

        $result = json_encode(array('success' => true, 'msg' => $request->sentence));

        return $result;
    }

    public function storeJSON(Request $request)
    {
        $nmea = $request['nmea'];

        $result = json_encode(array('success' => true, 'msg' => $nmea));

        return $result;
    }
}
