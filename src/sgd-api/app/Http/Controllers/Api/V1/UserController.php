<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\UserResource;
use App\Http\Traits\HttpResponses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Info(
 *    title="APIs For Thrift Store",
 *    version="1.0.0",
 * ),
 *   @OA\SecurityScheme(
 *       securityScheme="bearerAuth",
 *       in="header",
 *       name="bearerAuth",
 *       type="http",
 *       scheme="bearer",
 *       bearerFormat="JWT",
 *    ),
 */
class UserController extends \Illuminate\Routing\Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'fix_phone' => 'required|numeric',
            'cel_phone' => 'required|numeric',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $emailVerifyExists = User::where('email', $validator->validated()['email'])->first();

        if (!is_null($emailVerifyExists)) {
            $error = [
                'email' => 'e-mail ja registrado!'
            ];

            return $this->error('User not created.', 422, $error);
        }

        $data = $validator->validated();
        $data['password'] = Hash::make($data['password']);

        $created = User::create($data);

        if (!$created) {
            return $this->error('User not created.', 400);
        }

        return $this->response('User created.', 200, $created);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('_id', $id)->first();
        if (!empty($user)) {
            return new UserResource($user);
        }
        return $this->error('User not found.', 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'fix_phone' => 'required|numeric',
            'cel_phone' => 'required|numeric',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->error('Data invalid.', 422, $validator->errors());
        }

        $emailVerifyExists = User::where('email', $validator->validated()['email'])->first();

        if (!is_null($emailVerifyExists) && $id != $emailVerifyExists->id) {
            $error = [
                'email' => 'e-mail ja registrado em outro user!'
            ];

            return $this->error('User not updated.', 422, $error);
        }

        $user = User::find($id);

        if (empty($user)) {
            return $this->error('user not found.', 400);
        }

        $updated = $user->update(
            $validator->validated()
        );

        if (!$updated) {
            return $this->error('User not updated.', 400);
        }

        return $this->response('User updated.', 200, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return $this->error('user not found.', 400);
        }

        $deleted = $user->delete();

        if (!$deleted) {
            return $this->error('user not deleted.', 400);
        }

        return $this->response('user deleted.', 200, $user);
    }
}