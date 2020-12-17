<?php

namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\QuestionTable ;
class QuestionController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$questions = QuestionTable::all();
			return response()->json($questions);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $questions = QuestionTable::create($input);

	   return response()->json(['success' => true, 'data' => $questions,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = QuestionTable::find($id);

		return response()->json($questions);
    }



     public function destroy($id)
    {
        $questions= QuestionTable::find($id);

		if (empty($questions))
		{
			return response()->json(['success' => false,'message' => 'question not found']);
		}

		$questions->delete();

		return response()->json(['success' => true, 'message' => 'question deleted successfully']);
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
