<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Dars;
class LessonController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$dars = Dars::all();
			return response()->json($dars);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $dars = Dars::create($input);

	   return response()->json(['success' => true, 'data' => $dars,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dars = Dars::find($id);

		return response()->json($dars);
    }



     public function destroy($id)
    {
        $dars= Dars::find($id);

		if (empty($dars))
		{
			return response()->json(['success' => false,'message' => 'User not found']);
		}

		$dars->delete();

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
