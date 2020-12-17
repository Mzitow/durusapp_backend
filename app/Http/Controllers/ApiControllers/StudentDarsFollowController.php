<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\StudentLessonFollow;

class StudentDarsFollowController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$studentlessonfollows = StudentLessonFollow::all();
			return response()->json($studentlessonfollows);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $studentlessonfollows = StudentLessonFollow::create($input);

	   return response()->json(['success' => true, 'data' => $studentlessonfollows,'message' => 'studentlessonfollows stored successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentlessonfollows = StudentLessonFollow::find($id);

		return response()->json($studentlessonfollows);
    }



     public function destroy($id)
    {
        $studentlessonfollows  = StudentLessonFollow::find($id);

		if (empty($studentlessonfollows))
		{
			return response()->json(['success' => false,'message' => 'studentlessonfollows not found']);
		}

		$studentlessonfollows->delete();

		return response()->json(['success' => true, 'message' => 'studentlessonfollows deleted successfully']);
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
