<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\StudentAttendance;
class StudentAttendanceController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$studentsattendances = StudentAttendance::all();
			return response()->json($studentsattendances);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $studentsattendances = StudentAttendance::create($input);

	   return response()->json(['success' => true, 'data' => $studentsattendances,'message' => 'studentsattendances stored successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentsattendances = StudentAttendance::find($id);

		return response()->json($studentsattendances);
    }



     public function destroy($id)
    {
        $studentsattendances  = StudentAttendance::find($id);

		if (empty($studentsattendances))
		{
			return response()->json(['success' => false,'message' => 'studentsattendances not found']);
		}

		$studentsattendances->delete();

		return response()->json(['success' => true, 'message' => 'studentsattendances deleted successfully']);
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
