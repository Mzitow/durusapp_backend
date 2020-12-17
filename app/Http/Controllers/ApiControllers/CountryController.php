<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Country;

class CountryController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$coutry = Country::all();
			return response()->json($coutry);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $coutry = Country::create($input);

	   return response()->json(['success' => true, 'data' => $coutry,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coutry = Country::find($id);

		return response()->json($coutry);
    }



     public function destroy($id)
    {
        $coutry= Country::find($id);

		if (empty($coutry))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$coutry->delete();

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
