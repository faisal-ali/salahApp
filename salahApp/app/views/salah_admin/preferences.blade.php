@extends('layout.master')

@section('title')
Preferences
@stop

@section('content')
<div class="container">
    <div class="container">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Preferences</div>
                <div class="panel-body text-center">
                    <span>Marketing Emails: </span>
                    <input id="switch1" type="checkbox" checked="checked" value="" />
                    <hr />
    
                    <span>Monthly Newsletter: </span>
                    <input id="switch2" type="checkbox" checked="checked" value="" />
                    <hr />
    
                    <span>Keep History: </span>
                    <input id="switch3" type="checkbox" checked="checked" value="" class="long" />
                    <hr />
    
                    <span>Admin Panel: </span>
                    <input id="switch4" type="checkbox" checked="checked" value="" />
                    <hr />
    
                    <span>Support Panel: </span>
                    <input id="switch5" type="checkbox" checked="checked" value="" />
                    <hr />
    
                    <button type="button" class="btn btn-success">Save Settings</button>
                </div>
    
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
@stop

