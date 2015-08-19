<?php

class SalahController extends \BaseController {
	
	public function preferences()
	{
		return View::make('salah_admin.preferences');	
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mosques = Mosque::lists('name','id');
		reset($mosques);
		$timings = $this->getTimings(key($mosques));
		return View::make('salah_admin.index', array('mosques' => $mosques, 'timings' => $timings));
	}
	
	function getTimings($mosqueId)
	{
		$salahTimes = MosqueSalahTime::where('mosque_id','=', $mosqueId)->get();
		return $salahTimes;
	}
	
	public function getTimingsAjax()
	{
		if ($this->is_ajax()) {
			$salahTimes = MosqueSalahTime::where('mosque_id','=', $_GET["id"])->get();
		  	echo json_encode($salahTimes);
		}
	}
	
	//Function to check if the request is an AJAX request
	function is_ajax() {
	  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}
	
	public function view()
	{
		$mosques = Mosque::lists('name','id');
		reset($mosques);
		$timings = $this->getTimings(key($mosques));
		return View::make('salah.index', array('mosques' => $mosques, 'timings' => $timings));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$this->updateTimings(1, $input['mosque'], $input['fajar']);
		$this->updateTimings(2, $input['mosque'], $input['zuhar']);
		$this->updateTimings(3, $input['mosque'], $input['asar']);
		$this->updateTimings(4, $input['mosque'], $input['maghrib']);
		$this->updateTimings(5, $input['mosque'], $input['isha']);
		$this->updateTimings(6, $input['mosque'], $input['jumua']);
		return Redirect::action('SalahController@index');
	}
	
	function updateTimings($salahId, $mosqueId, $newTime)
	{
		echo "inside";
		$salahTimes = MosqueSalahTime::whereRaw('mosque_id = ? AND salah_id = ?', [$mosqueId, $salahId])->get();
		echo $salahTimes;
		if (count($salahTimes) == 1)
		{
			$salahTimes[0]->jamah = $newTime;
			$salahTimes[0]->azaan = $newTime;
			$salahTimes[0]->save();
		} else {
			$salahTimes = new MosqueSalahTime;
			$salahTimes->mosque_id = $mosqueId;
			$salahTimes->salah_id = $salahId;
			$salahTimes->jamah = $newTime;
			$salahTimes->azaan = $newTime;
			$salahTimes->save();
		}
		
		return true;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
