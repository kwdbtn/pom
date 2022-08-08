@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <strong>{{ $equipment->exists ? "Editing '".$equipment->name."'" : "New equipment" }}</strong>
                        <span>
                            <a href="{{ route('equipment.index') }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </span>
                    </h4>
                    <hr>

                    {!! Form::model($equipment, ['method' => $equipment->exists ? 'PUT' : 'POST', 
                    'route' => $equipment->exists ? ['equipment.update', $equipment] : ['equipment.store'],
                    'class' => 'form-horizontal'])
                    !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-8 col-md-8">
                            {!! Form::text('name', null,['class'=>'form-control col-md-7 col-xs-8
                            ','placeholder'=>'Equipment', 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 mt-2">
                            <button type="submit" class="btn btn-dark">{{ $equipment->exists ? @"Update" : @"Create" }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection