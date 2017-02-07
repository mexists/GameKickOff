<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Phone;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class PhonesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$phones = Phone::latest()->get();
		return view('admin.phones.index', compact('phones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.phones.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		phone::create($request->all());
		return redirect('admin/phones')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$phone = Phone::findOrFail($id);
		return view('admin.phones.show', compact('phone'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phone = Phone::findOrFail($id);
		return view('admin.phones.edit', compact('phone'));
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
		$phone = Phone::findOrFail($id);
		$phone->update($request->all());
		return redirect('admin/phones')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Phone.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.phones.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Phone.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$phone = Phone::destroy($id);

            // Redirect to the group management page
            return redirect('admin/phones')->with('success', Lang::get('message.success.delete'));

    	}

}