@extends('layouts.master')

@section('Custom_CSS')
    <style type="text/css">
        
        html
        {
            background: #fff;
        }
        
        .row
        {
            min-width: 400px;
            width: 600px;
            margin: 7% auto;
        }

        @media (max-width: 768px) {
            .row
            {
                width: 90%;
                margin-top: 20px;
            }
        }
    </style>
@endsection

@section('body')
	<div class="row">
		<div class="col s12 m12">
            <div class="card">
                <h1 class="center">404</h1>
                <div class="card-content">
                    <p class="center" style="font-size: 20px">{{ trans('index.error_404_message') }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ url(config('master.dashboard_url')) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">home</i></a> 
                </div>
            </div>
        </div>
	</div>
@endsection