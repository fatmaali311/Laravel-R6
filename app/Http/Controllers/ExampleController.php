<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    function login() {
        return view('login');
    }

    function cv() {
        
        return view('cv');
    }
        
    function uploadForm(){
        return view('upload');
    }
    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
        
}
  public function about() {
        
        return view('about');
    }
    public function test() {
        
        // dd(Student::find(3)?->phone->phone_number);
        // dd(Student::find(1),Student::find(1)->phone->phone_number);
        dd(
            DB::table('students')
            ->join('phones','phones.id','=','students.phone_id')
            ->where('students.id','=',1)
            ->first()

        );
    }

}