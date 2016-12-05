<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use App\Trasformers\UserTransformer;
use App\Model\courseware_studentmodule;

class UsersController extends Controller {

    use Helpers;

    /**
     * Display a listing of the  resource
     * @return \Illuminate\Http\Response
     */
    public function index($student_id, $id) {
        $user = DB::table('courseware_studentmodule')
                ->where('student_id', '=', $student_id)
                ->where('id', '=', $id)->get();
        return response()->json($user);
    }

    public function progreso($student_id, $course_id) {
        $curso = base64_decode($course_id);
        $user = DB::table('courseware_studentmodule')
                ->where('student_id', '=', $student_id)
                ->where('course_id', '=', $curso)->get();
        return response()->json($user);
    }

    public function historial($student_module_id) {
        $modulo = DB::table('courseware_studentmodulehistory')
                ->where('student_module_id', '=', $student_module_id)->get();
        return response()->json($modulo);
    }

    /**
     * Store  a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests $request) {
        dd($request->all());
//        $data = $request->except('password_confirmation');
//        $data['password'] = bcrypt($data['password']);
//       $user = User::create($data); 
////       return $this->response->item($user, new UserTransformer());
//       return $this->response->item($user, new UserTransformers)->setStatusCode(201);
    }

}
