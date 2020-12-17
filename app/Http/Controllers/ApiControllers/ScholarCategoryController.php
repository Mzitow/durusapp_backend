<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\ScholarCategory;

class ScholarCategoryController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{
			$scholarcategories = ScholarCategory::all();
			return response()->json($scholarcategories);
		}

	 public function store(Request $request)
    {
		  $input = $request->all();


        $scholarcategories = ScholarCategory::create($input);

	   return response()->json(['success' => true, 'data' => $scholarcategories,'message' => 'scholarcategories created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scholarcategories = ScholarCategory::find($id);

		return response()->json($scholarcategories);
    }



     public function destroy($id)
    {
        $scholarcategories = ScholarCategory::find($id);

		if (empty($scholarcategories))
		{
			return response()->json(['success' => false,'message' => 'scholarcategories not found']);
		}

		$scholarcategories->delete();

		return response()->json(['success' => true, 'message' => 'scholarcategories deleted successfully']);
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
