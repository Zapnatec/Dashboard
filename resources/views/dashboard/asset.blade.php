@extends('layouts.app')

@section('content')

<section>
	<div class="row">
		@include('dashboard.table.clients')
		@include('dashboard.table.assets')
	</div>
</section>

@endsection