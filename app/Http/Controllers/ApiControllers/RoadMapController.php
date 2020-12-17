<?php
namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\RoadMap;
class RoadMapController extends Controller
{
    public function create(Request $request)
    {


    }



		public function index()
		{
			$roadmaps = RoadMap::all();
			return response()->json($roadmaps);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $roadmaps = RoadMap::create($input);

	   return response()->json(['success' => true, 'data' => $roadmaps,'message' => 'roadmaps created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roadmaps = RoadMap::find($id);

		return response()->json($roadmaps);
    }



     public function destroy($id)
    {
        $roadmaps= RoadMap::find($id);

		if (empty($roadmaps))
		{
			return response()->json(['success' => false,'message' => 'roadmaps not found']);
		}

		$roadmaps->delete();

		return response()->json(['success' => true, 'message' => 'roadmaps deleted successfully']);
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
