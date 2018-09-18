@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if ($errors->has('msg'))
                    <div class="alert alert-warning">
                        {{ $errors->first('msg') }}
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Login </div>
                    <div class="panel-body">
                        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                            Login utilizando Google
                        </a>
                        <hr>
                        <a href="{{ route('login') }}" class="btn btn-default btn-block">
                            Login utilizando Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection