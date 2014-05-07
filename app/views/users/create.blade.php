@extends('layouts.app')

@section('content')
<h1>Sign up</h1>

@if (Session::has('flash_error'))
<div class="flash_error">{{ Session::get('flash_error') }}</div>
@endif

{{ Form::open() }}

<p>
	{{ Form::label('username', 'Username') }}<br/>
	{{ Form::text('username', Input::old('username')) }}
</p>

<p>
	{{ Form::label('password', 'Password') }}<br/>
	{{ Form::password('password') }}
</p>

<p>{{ Form::submit('Sign Up') }}</p>

{{ Form::close() }}
@stop
