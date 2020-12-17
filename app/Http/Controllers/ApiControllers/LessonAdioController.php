<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\LessonAudio;
class LessonAdioController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$lessonaudios = LessonAudio::all();
			return response()->json($lessonaudios);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $lessonaudios = LessonAudio::create($input);

	   return response()->json(['success' => true, 'data' => $lessonaudios,'message' => 'aduio created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lessonaudios = LessonAudio::find($id);

		return response()->json($lessonaudios);
    }



     public function destroy($id)
    {
        $lessonaudios= LessonAudio::find($id);

		if (empty($lessonaudios))
		{
			return response()->json(['success' => false,'message' => 'aduio not found']);
		}

		$lessonaudios->delete();

		return response()->json(['success' => true, 'message' => 'aduio deleted successfully']);
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
