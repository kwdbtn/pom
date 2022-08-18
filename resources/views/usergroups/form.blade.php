@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <strong>{{ $usergroup->exists ? "Updating '".$usergroup->name."' Group" : "New user group" }}</strong>
                        <span>
                            <a href="{{ route('usergroups.index') }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </span>
                    </h4>
                    <hr>

                    {!! Form::model($usergroup, ['method' => $usergroup->exists ? 'PUT' : 'POST', 
                    'route' => $usergroup->exists ? ['usergroups.update', $usergroup] : ['usergroups.store'],
                    'class' => 'form-horizontal'])
                    !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Group:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-8 col-md-8">
                            {!! Form::text('name', null,['class'=>'form-control col-md-7 col-xs-8
                            ','placeholder'=>'User group', 'required', 'disabled']) !!}
                        </div>
                    </div>

                    <div class="form-group row mt-1">
                        {!! Form::label('type', 'User:', ['class' => 'control-label col-sm-2 text-end']) !!}
                        <div class="col-sm-8">
                            {{Form::select('user', $arr['users'], null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 mt-2">
                            <button type="submit" class="btn btn-dark">{{ $usergroup->exists ? @"Assign" : @"Create" }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection