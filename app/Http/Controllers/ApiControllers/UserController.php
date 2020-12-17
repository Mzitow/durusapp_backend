<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ApiModels\Student;
use App\Models\ApiModels\Scholar;

class UserController extends Controller
{
     public function create(Request $request)
    {


    }

	public function login(Request $request)
	{

		$user_name = $request->input('user_name');
		$password = $request->input('password');

		$user = User::where('user_name',$user_name)->first();
	//	 $user->timestamps=false;

		if(!empty($user))
		{
			if (Hash::check($password,$user->password))
			{
				 return response()->json(['success' => true, 'data' => $user,'message' => 'you are log in successfully'])->setStatusCode(200);
			}

		}
		
		else{
		return response()->json(['success' => false,'data' => null,'message' => 'wrong credential'])->setStatusCode(200);
		}

	}

		public function index()
		{
			$users = User::all();
		 //$users->timestamps=false;
			return response()->json($users);
		}

	 public function store(Request $request)
    {
         $validatedData = $request->validate(User::$rules, User::$customMessages);
		 $input = $request->all();

	   $input['password'] = Hash::make($request->input('password'));

        $user = User::create($input);
        if($user->usergroup_id == 1){
            $student = new Student;
           $student->user_id = $user->id;
           $student->save();
            return response()->json(['success' => true, 'data' => $user,'message' => 'User created successfully']);
        }

	   
	   elseif($user->usergroup_id == 2){
	        $scholar = new Scholar;
           $scholar->user_id = $user->id;
           $scholar->save();
            return response()->json(['success' => true, 'data' => $user,'message' => 'User created successfully']);
	       
	   }
	   else{
	       return response()->json(['success' => false, 'data' => null,'message' => 'something went wrong']);
	   }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

		return response()->json($user);
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
