@extends('layouts.dashboard_contents')

@section('content')
<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('inc.message')
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    {!! Form::open(['action'=>['DashboardController@update',$user->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " value=" {{$user->name}} " name="name" placeholder="name" required autocomplete="name" autofocus>

                            </div>
                        </div>               

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" >
                            </div>
                        </div>
                        {{Form::hidden('_method','PUT')}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a class="btn btn-light" href="{{ URL::previous() }}">Go Back</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
