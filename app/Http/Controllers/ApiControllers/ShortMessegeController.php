<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\ShortMessege;
class ShortMessegeController extends Controller
{
      public function create(Request $request)
    {


    }



		public function index()
		{
			$shortmesseges = ShortMessege::all();
			return response()->json($shortmesseges);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $shortmesseges = ShortMessege::create($input);

	   return response()->json(['success' => true, 'data' => $shortmesseges,'message' => 'messeges storeed successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shortmesseges = ShortMessege::find($id);

		return response()->json($shortmesseges);
    }



     public function destroy($id)
    {
        $shortmesseges= ShortMessege::find($id);

		if (empty($shortmesseges))
		{
			return response()->json(['success' => false,'message' => 'message not found']);
		}

		$shortmesseges->delete();

		return response()->json(['success' => true, 'message' => 'message deleted successfully']);
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
