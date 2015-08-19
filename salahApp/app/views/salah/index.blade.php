<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">  
		 
	    <title>Salah Timings</title>
	    <link rel="stylesheet" href="{{ secure_url('assets/css/salah-table.css') }}" type="text/css" />
    </head>
    <body>
		<div class="text-center">
			<span class="col-sm-4 col-xs-3">Mosque: </span>
			{{ Form::select('mosque', $mosques, Input::old('mosque'), ['class' => 'col-sm-5 col-xs-7', 'id' => 'mosques']) }}
		</div>
    <div id="main">
		<table class="features-table">
				<thead>
					<tr>
						<td></td>
						<td>Azaan</td>
						<td>Jamah</td>
					</tr>
				</thead>				
				<tbody>
					<tr>
						<td><h2>Fajar<h2></td>
						<td id="fajar_1">{{{ isset($timings) ? $timings[0]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[0]->azaan : 'current' }}}</td>
					</tr>
					<tr>
						<td><h2>Zuhar<h2></td>
						<td id="zuhar">{{{ isset($timings) ? $timings[1]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[1]->azaan : 'current' }}}</td>
					</tr>
					<tr>
						<td><h2>Asar<h2></td>
						<td id="asar">{{{ isset($timings) ? $timings[2]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[2]->azaan : 'current' }}}</td>
					</tr>
					<tr>
						<td><h2>Maghrib<h2></td>
						<td id="maghrib">{{{ isset($timings) ? $timings[3]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[3]->azaan : 'current' }}}</td>
					</tr>
					<tr>
						<td><h2>Isha<h2></td>
						<td id="isha">{{{ isset($timings) ? $timings[4]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[4]->azaan : 'current' }}}</td>
					</tr>
					<tr>
						<td><h2>Juma<h2></td>
						<td id="jumua">{{{ isset($timings) ? $timings[5]->azaan : 'current' }}}</td>
						<td>{{{ isset($timings) ? $timings[5]->azaan : 'current' }}}</td>
					</tr>
				</tbody>
		</table>

	</div>
	
        <!-- jQuery Version 1.11.1 -->
    <script src="{{ secure_url('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ secure_url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/shieldui-all.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ secure_url('assets/js/salah.js') }}"></script>
    </body>
</html>