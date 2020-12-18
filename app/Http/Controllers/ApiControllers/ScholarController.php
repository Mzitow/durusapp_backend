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
        $request->validate([
            'image'         =>      'nullable|file'
        ]);

        $input = $request->all();
        $scholar = Scholar::create($input);

        if ($request->hasFile('image')) {
            $scholar->addMediaFromRequest('image')->toMediaCollection('image');

        }

        return  response()->json(['success' => true, 'data' => $scholar,'message' => 'order created successfully','url'=>$scholar->getFirstMediaUrl('image')]);



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
