<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Form;
use DB;
Use Redirect;

class HomeController extends Controller
{
    public function index() {
        $data = DB::table('forms')->get();
        return view('home', ['data' => $data]);
    }

    public function db(Request $request) {
        $hobbies = implode(',', $request->hobbies);
        Form::create([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'gender' => $request->gender,
            'hobbies' => $hobbies
        ]);

      return response()->json(['success'=>'Form is successfully submitted!']);

    }

    public function delete(){
        $id = last(request()->segments());
        Form::where('id', $id)->delete();

        return Redirect::route('home');
    }

    public function edit(){
        $id = last(request()->segments());
        $data = Form::where('id', $id)->get();
        return view('edit', ['data' => $data]);
    }

    public function updateDb(Request $request) {
        $hobbies = '';
        if(! empty($request->hobbies))
        {
            $hobbies = implode(',', $request->hobbies);
        }
        $id = last(request()->segments());
        Form::where('id', $id)->update([
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'gender' => $request->gender,
            'hobbies' => $hobbies
        ]);

      return response()->json(['success'=>'Form is successfully submitted!']);

    }
}
