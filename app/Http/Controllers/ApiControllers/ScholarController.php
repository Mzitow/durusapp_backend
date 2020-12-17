<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Scholar;

class ScholarController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$scholars = Scholar::all();
			return response()->json($scholars);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $scholars = Scholar::create($input);

	   return response()->json(['success' => true, 'data' => $scholars,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scholars = Scholar::find($id);

		return response()->json($scholars);
    }



     public function destroy($id)
    {
        $scholars= Scholar::find($id);

		if (empty($scholars))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$scholars->delete();

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
