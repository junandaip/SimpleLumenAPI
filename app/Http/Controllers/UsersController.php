<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        return Users::all();
    }

    public function showById($id)
    {
        $user = Users::find($id);
        if (!$user) {
            return response()->json([
                'message' => 'user not found'
            ]);
        } 
        return $user;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        return Users::create($request->all());
    }

    public function update(Request $request, $id) {
        $user = Users::find($id);
        if ($user) {
            $user->update($request->all());

            return response()->json([
                'message' => 'User has been updated'
            ]);
        }
        return response()->json([
            'message' => 'User not found'
        ], 404);
    }

    public function delete($id){
        $user = Users::find($id);
        if ($user) {
            $user->delete();

            return response()->json([
                'message' => 'User has been deleted'
            ]);
        }
        return response()->json([
            'message' => 'User not found'
        ], 404);
    }
}
