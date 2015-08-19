@extends('layout.master')

@section('title')
Salah Manager
@stop

@section('content')
<div class="container">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Salah time manager</div>
            <div class="panel-body">
                {{ Form::open(array('action' => 'SalahController@store')) }}
                <div>
                    <span class="col-sm-4 col-xs-3">Mosque: </span>
                    {{ Form::select('mosque', $mosques, Input::old('mosque'), ['class' => 'col-sm-5 col-xs-7', 'id' => 'mosques_admin']) }}
                </div>
                <hr class="col-sm-11"/>
                <div style="padding-top:25px;">
                    <span class="col-sm-4 col-xs-3">Fajar: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="fajar" name="fajar" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[0]->jamah : 'current' }}}" type="text" class="input-small ">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4 col-xs-3">Zuhar: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="zuhar" name="zuhar" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[1]->jamah : 'current' }}}" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4 col-xs-3">Asar: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="asar" name="asar" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[2]->jamah : 'current' }}}" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4 col-xs-3">Maghrib: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="maghrib" name="maghrib" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[3]->jamah : 'current' }}}" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4 col-xs-3">Isha: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="isha" name="isha" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[4]->jamah : 'current' }}}" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4 col-xs-3">Jumua: </span>
                    <div class="input-append bootstrap-timepicker">
                        <input id="jumua" name="jumua" data-minute-step="1" data-default-time="{{{ isset($timings) ? $timings[5]->jamah : 'current' }}}" type="text" class="input-small">
                        <span class="add-on"><i class="icon-time"></i></span>
                    </div>
                </div>
                <hr class="col-sm-11"/>
                
                <div>
                    <span class="col-sm-4"></span>
                    <input type="Submit" class="btn btn-success col-sm-4" value="Save Settings"/>
                </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $('#fajar').timepicker();
    $('#zuhar').timepicker();
    $('#asar').timepicker();
    $('#maghrib').timepicker();
    $('#isha').timepicker();
    $('#jumua').timepicker();
</script>
@stop