<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Field;

class FieldController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$field = Field::all();
			return response()->json($field);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $field = Field::create($input);

	   return response()->json(['success' => true, 'data' => $field,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $field = Field::find($id);

		return response()->json($field);
    }



     public function destroy($id)
    {
        $field= Field::find($id);

		if (empty($field))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$field->delete();

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
