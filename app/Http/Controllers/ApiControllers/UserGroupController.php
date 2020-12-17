<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\UserGroup;

class UserGroupController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$users = UserGroup::all();
			return response()->json($users);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $user = UserGroup::create($input);

	   return response()->json(['success' => true, 'data' => $user,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserGroup::find($id);

		return response()->json($user);
    }



     public function destroy($id)
    {
        $user = UserGroup::find($id);

		if (empty($user))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$user->delete();

		return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
}
