<?php
namespace App\Http\Controllers\ApiControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ApiModels\Category;

class CategoryController extends Controller
{
     public function create(Request $request)
    {


    }



		public function index()
		{   
		    
		   if($Categories = Category::all()){	
			return response()->json(["success"=>"true","data"=>$Categories,"messege"=>"تم جلب الفئات بنجاح"]);
			}	else{
		    	return response()->json(["success"=>"false","data"=>null,"messege"=>"حدث خطأ ما. أعد المحاولة من فضلك"]);
		}	
		}
		
	

	 public function store(Request $request)
    {
        $validatedData = $request->validate(Category::$rules, Category::$customMessages);
        
		  $input = $request->all();


        $Categories = Category::create($input);

	   return response()->json(['success' => true, 'data' => $Categories,'message' => 'User created successfully']);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Categories = Category::find($id);

		return response()->json($Categories);
    }



     public function destroy($id)
    {
        $Category = Category::find($id);

		if (empty($Category))
		{
			return response()->json(['success' => false,'message' => 'category not found']);
		}

		$Category->delete();

		return response()->json(['success' => true, 'message' => 'category deleted successfully']);
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
