@extends('layouts.master')

@section('Custom_CSS')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@stop

@section('body_class', (config('master.collapse_sidebar') ? 'sidebar-collapse' : ''))

@section('body')

	@include('layouts.partial.header')
		<ul id="slide-out" class="side-nav fixed collection with-header">
		 @if (!Auth::guest())
			 <div class="user-view">

			    <div class="background">
			      <img src="{{ asset('img/background.jpg') }}">
			    </div>

			    <a href="#!user"><img class=" white responsive-img circle" src="{{ asset('img/logo.png') }} "></a>
			    <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
			    <a href="#!email"><span class="white-text email">{{  Auth::user()->email }}</span></a>

			    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="white-text email">{{ trans('index.log_out') }}</span>
                </a>
	    	    <form id="logout-form" action="{{ url(config('master.logout_url')) }}" method="POST" style="display: none;">
				    {{ csrf_field() }}
			    </form>

		   </div>
		 @endif
			@each('layouts.partial.sidebar', config('master.menu'), 'item')
		</ul>
	@yield('content')

@stop