@extends('layout.master')

@section('title')
Create User
@stop

@section('content')
<div class="container">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Create User</div>
            {{ Form::open(array('action' => 'UserController@store')) }}
            <div class="panel-body text-center">
                <!--        <span>Marketing Emails: </span>-->
                <!--<input id="switch1" type="checkbox" checked="checked" value="" />-->
                <!--<hr />-->
                <div class="row">
                    <span class="col-sm-4 col-xs-12">
                    </span>
                    <span>
                        {{{ isset($error) ? $error : '' }}}
                    </span>
                </div>
                <div class="row">
                    <span>
                        <label class="col-sm-4 col-xs-12" for="username">Username:</label>
                    </span>
                    <span>
                        @if(isset($username))
                            <input class="col-sm-4 col-xs-12" type="text" name="username" value='{{ $username }}'required/>
                        @else
                            <input class="col-sm-4 col-xs-12" type="text" name="username" required/>
                        @endif
                    </span>
                </div>
                <div class="row">
                    <span>
                        <label class="col-sm-4 col-xs-12" for="password">Password:</label>
                    </span>
                    <span>
                        <input class="col-sm-4 col-xs-12" type="password" name="password" required/>
                    </span>
                </div>
                <div class="row">
                    <span>
                        <label class="col-sm-4 col-xs-12" for="confirm_password">Confirm Password:</label>
                    </span>
                    <span>
                        <input class="col-sm-4 col-xs-12" type="password" name="confirm_password" required/>
                    </span>
                </div>
                <div class="row">
                    <span>
                        <label class="col-sm-4 col-xs-12" for="mosque_name">Mosque name:</label>
                    </span>
                    <span>
                        <input class="col-sm-4 col-xs-12" type="text" name="mosque_name" required/>
                    </span>
                </div>
                <input type="submit" class="btn btn-success" value="Create"/>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
@stop