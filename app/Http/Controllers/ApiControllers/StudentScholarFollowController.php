<?php
namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\StudentScholarFollow;
class StudentScholarFollowController extends Controller
{
        public function create(Request $request)
    {


    }



		public function index()
		{
			$studentscholarfollowers = StudentScholarFollow::all();
			return response()->json($studentscholarfollowers);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $studentscholarfollowers = StudentScholarFollow::create($input);

	   return response()->json(['success' => true, 'data' => $studentscholarfollowers,'message' => 'studentscholarfollowers stored successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentscholarfollowers = StudentScholarFollow::find($id);

		return response()->json($studentscholarfollowers);
    }



     public function destroy($id)
    {
        $studentscholarfollowers  = StudentScholarFollow::find($id);

		if (empty($studentscholarfollowers))
		{
			return response()->json(['success' => false,'message' => 'studentscholarfollowers not found']);
		}

		$studentscholarfollowers->delete();

		return response()->json(['success' => true, 'message' => 'studentscholarfollowers deleted successfully']);
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
