@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birth day</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="Gender" type="text" class="form-control" name="Gender" value="{{ old('Gender') }}" required autofocus>

                                @if ($errors->has('Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Gender</label>

                          <div class="col-md-6">
                        	<input checked="checked" name="gender" type="radio" value="M">
                        	<label for="gender" class="margin">Male</label>
                        	<input name="gender" type="radio" value="F" id="gender">
                        	<label for="gender" class="margin">Female</label>
                        </div>
                      </div> -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('employeeID') ? ' has-error' : '' }}">
                            <label for="employeeID" class="col-md-4 control-label">EmployeeID</label>

                            <div class="col-md-6">
                                <input id="employeeID" type="text" class="form-control" name="employeeID" value="{{ old('employeeID') }}" required>

                                @if ($errors->has('employeeID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employeeID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('shiftStart') ? ' has-error' : '' }}">
                            <label for="shiftStart" class="col-md-4 control-label">Shift Start</label>

                            <div class="col-md-6">
                                <input id="shiftStart" type="date" class="form-control" name="shiftStart" value="{{ old('shiftStart') }}" required>

                                @if ($errors->has('shiftStart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shiftStart') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('shiftEnd') ? ' has-error' : '' }}">
                            <label for="shiftEnd" class="col-md-4 control-label">Shift End</label>

                            <div class="col-md-6">
                                <input id="shiftEnd" type="date" class="form-control" name="shiftEnd" value="{{ old('shiftEnd') }}" required>

                                @if ($errors->has('shiftEnd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shiftEnd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hiredDate') ? ' has-error' : '' }}">
                            <label for="hiredDate" class="col-md-4 control-label">Hired Date</label>

                            <div class="col-md-6">
                                <input id="hiredDate" type="date" class="form-control" name="hiredDate" value="{{ old('hiredDate') }}" required>

                                @if ($errors->has('hiredDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hiredDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('exitDate') ? ' has-error' : '' }}">
                            <label for="exitDate" class="col-md-4 control-label">Exit Date</label>

                            <div class="col-md-6">
                                <input id="exitDate" type="date" class="form-control" name="exitDate" value="{{ old('exitDate') }}" required>

                                @if ($errors->has('exitDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exitDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="salary" class="col-md-4 control-label">Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
