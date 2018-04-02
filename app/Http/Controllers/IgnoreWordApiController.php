<?php

namespace App\Http\Controllers;

use App\IgnoreWord;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class IgnoreWordApiController extends Controller
{

    /**
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\Response
     */
    public function create($data)
    {
        //$user = JWTAuth::parseToken()->authenticate();
        $user = Auth::user();
        return IgnoreWord::create([
            'ignore_word'    => $data['ignore_word'],
            'user_id'        => $user->id,
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ignore_word' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        } else {
            return $this->create($request->all());
        }
    }
}
