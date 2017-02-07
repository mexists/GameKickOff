<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StationLog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class StationLogsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$station_logs = StationLog::latest()->get();
		return view('admin.station_logs.index', compact('station_logs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.station_logs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		station_log::create($request->all());
		return redirect('admin/station_logs')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$station_log = StationLog::findOrFail($id);
		return view('admin.station_logs.show', compact('station_log'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$station_log = StationLog::findOrFail($id);
		return view('admin.station_logs.edit', compact('station_log'));
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
		$station_log = StationLog::findOrFail($id);
		$station_log->update($request->all());
		return redirect('admin/station_logs')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given StationLog.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.station_logs.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given StationLog.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$station_log = StationLog::destroy($id);

            // Redirect to the group management page
            return redirect('admin/station_logs')->with('success', Lang::get('message.success.delete'));

    	}

}