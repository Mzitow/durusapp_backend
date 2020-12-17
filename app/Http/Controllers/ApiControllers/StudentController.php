<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Student;
class StudentController extends Controller
{
      public function create(Request $request)
    {


    }



		public function index()
		{
			$students = Student::all();
			return response()->json($students);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $students = Student::create($input);

	   return response()->json(['success' => true, 'data' => $students,'message' => 'student created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);

		return response()->json($students);
    }



     public function destroy($id)
    {
        $students= Student::find($id);

		if (empty($students))
		{
			return response()->json(['success' => false,'message' => 'student not found']);
		}

		$students->delete();

		return response()->json(['success' => true, 'message' => 'student deleted successfully']);
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
