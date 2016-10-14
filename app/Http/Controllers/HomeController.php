<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$homes = Home::orderBy('id', 'desc')->paginate(10);

		return view('homes.index', compact('homes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('homes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{

		header("Access-Control-Allow-Origin: *");
	 	$headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];
        
		$home = new Home();

		$home->name = $request->input("name");
        $home->garage = $request->input("garage");
        $home->price = $request->input("price");
        $home->phone = $request->input("phone");
        $home->address = $request->input("address");
        $home->x_coordinate = $request->input("x_coordinate");
        $home->y_coordinate = $request->input("y_coordinate");
        $home->image_one = $request->input("image_one");
        $home->image_two = $request->input("image_two");
        $home->image_three = $request->input("image_three");
        $home->descripcion = $request->input("descripcion");

		$home->save();
		return 'datos guardados';
		// return redirect()->route('homes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$home = Home::findOrFail($id);

		return view('homes.show', compact('home'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$home = Home::findOrFail($id);

		return view('homes.edit', compact('home'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$home = Home::findOrFail($id);

		$home->name = $request->input("name");
        $home->garage = $request->input("garage");
        $home->price = $request->input("price");
        $home->phone = $request->input("phone");
        $home->address = $request->input("address");
        $home->x_coordinate = $request->input("x_coordinate");
        $home->y_coordinate = $request->input("y_coordinate");
        $home->image_one = $request->input("image_one");
        $home->image_two = $request->input("image_two");
        $home->image_three = $request->input("image_three");
        $home->descripcion = $request->input("descripcion");

		$home->save();

		return redirect()->route('homes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$home = Home::findOrFail($id);
		$home->delete();

		return redirect()->route('homes.index')->with('message', 'Item deleted successfully.');
	}

}
