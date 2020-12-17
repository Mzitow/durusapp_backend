<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\DarsType;
class LessonTypeController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$darstypes = DarsType::all();
			return response()->json($darstypes);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $darstypes = DarsType::create($input);

	   return response()->json(['success' => true, 'data' => $darstypes,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $darstypes = DarsType::find($id);

		return response()->json($darstypes);
    }



     public function destroy($id)
    {
        $darstypes= DarsType::find($id);

		if (empty($darstypes))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$darstypes->delete();

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
