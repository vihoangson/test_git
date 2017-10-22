<?php

namespace App\Http\Controllers\api;

use App\KyniemModel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \JWTAuth;

class Kyniem extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $data_obj = new KyniemModel();
        $data     = $data_obj->orderBy('id', 'desc')
                             ->limit(10)
                             ->offset($request->step)
                             ->get()
                             ->toArray();

        return response()->json($data);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getToken(Request $request) {
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        return response()->json(['token'=>$token]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $kn                 = new KyniemModel();

        $kn->kyniem_title   = isset($request->kyniem_title)?$request->kyniem_title:'';
        $kn->kyniem_content = $request->kyniem_content;
        $kn->save();

        if(isset($request->prev_link)){
            return redirect($request->prev_link);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
