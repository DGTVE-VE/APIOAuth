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
    public function curso($course_id) {
         $id = base64_decode($course_id);
        $curso = DB::table('vm_perfil_usuario')
                ->where('course_id', '=', $id)->get();
//        print Auth:
//        echo Authorizer::getResourceOwnerId();
//        if (! $curso)
//		{
//        	return response()->json(['errors'=>array(['code'=>404,'message'=>'Curso no encontrado.'])],404);
//		}
//
//		return response()->json(['status'=>'ok','data'=>$curso()->get()],200);
        return response()->json($curso);
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
