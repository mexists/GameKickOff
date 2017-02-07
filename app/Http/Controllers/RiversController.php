<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\River;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class RiversController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rivers = River::latest()->get();
		return view('admin.rivers.index', compact('rivers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.rivers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		River::create($request->all());
		return redirect('admin/rivers')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$river = River::findOrFail($id);
		return view('admin.rivers.show', compact('river'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$river = River::findOrFail($id);
		return view('admin.rivers.edit', compact('river'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$river = River::findOrFail($id);
		$river->update($request->all());
		return redirect('admin/rivers')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given River.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.rivers.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given River.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$river = River::destroy($id);

            // Redirect to the group management page
            return redirect('admin/rivers')->with('success', Lang::get('message.success.delete'));

    	}

}