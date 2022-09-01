@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <strong>{{ $outage->exists ? "Editing Application" : "Application for Protection Guarantee" }}</strong>
                        <span>
                            <a href="{{ route('outages.index') }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </span>
                    </h4>
                    <hr>

                    {!! Form::model($outage, ['method' => $outage->exists ? 'PUT' : 'POST', 
                    'route' => $outage->exists ? ['outages.update', $outage] : ['outages.store'],
                    'class' => 'form-horizontal'])
                    !!}

                    {!! Form::model($outage, ['method' => $outage->exists ? 'put' : 'post',
                        'route' => $outage->exists ? ['outages.update', $outage] :
                        ['outages.store'],
                        'class' => 'form-horizontal'])
                        !!}
                        <div class="form-group row">
                        {!! Form::label('applicant', 'Applicant:', ['class' => 'control-label col-sm-2 text-end'])
                        !!}
                        <div class="col-sm-12 col-md-10">
                            {!! Form::text('applicant', null,['class'=>'form-control col-md-7 col-xs-8
                            ','placeholder'=>'Applicant', 'required']) !!}
                        </div>
                    </div>
                        
                        <div class="form-group row mt-1">
                            {!! Form::label('type', 'Type:', ['class' => 'control-label col-sm-2 text-end']) !!}
                            <div class="col-sm-10">
                                {{Form::select('type', $types, null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            {!! Form::label('equipment_id', 'Equipment:', ['class' => 'control-label col-sm-2 text-end']) !!}
                            <div class="col-sm-10">
                            {!! Form::select('equipment[]',$arr['equipment'],isset($applicant->equipment) ? $applicant->equipment->pluck('id')->toArray() : null,['class'=>'form-control col-md-12 col-xs-12 select2', 'multiple']) !!}
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            {!! Form::label('protection_id', 'Protection:', ['class' => 'control-label col-sm-2 text-end']) !!}
                            <div class="col-sm-10">
                                {{Form::select('protection_id', $arr['protections'], null, ['class' => 'form-control col-md-10 col-xs-10'])}}
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            {!! Form::label('work', 'Work to be done:', ['class' => 'control-label col-sm-2 text-end']) !!}
                            <div class="col-sm-10">
                                {!! Form::textArea('work', null, ['class'=>'form-control col-md-12 col-xs-12','placeholder'=>'Work to be done...', 'rows' => '3']) !!}
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            {!! Form::label('from', 'From:', ['class' => 'control-label col-sm-2 text-end']) !!}
                        <div class="col-sm-10">
                            <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                {!! Form::text('from', null, ['class'=>'form-control datetimepicker-input col-md-12 col-xs-12','placeholder'=>'Start Date', 'data-target'=>'#datetimepicker7', 'data-toggle'=>"datetimepicker", 'required']) !!}
                                <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                                    <div class="input-group-text form-control"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row mt-1">
                        {!! Form::label('to', 'To:', ['class' => 'control-label col-sm-2 text-end']) !!}
                        <div class="col-sm-10">
                            <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                {!! Form::text('to', null, ['class'=>'form-control datetimepicker-input col-md-12 col-xs-12','placeholder'=>'End Date', 'data-target'=>'#datetimepicker8', 'data-toggle'=>"datetimepicker", 'required']) !!}
                                <div class="input-group-append" data-target="#datetimepicker8" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group row mt-1">
                            {!! Form::label('relayed__by', 'Relayed by:', ['class' => 'control-label col-sm-2 text-end'])
                            !!}
                            <div class="col-sm-12 col-md-10">
                                {!! Form::text('relayed_by', null,['class'=>'form-control col-md-7 col-xs-8
                                ','placeholder'=>'Relayed By', 'required']) !!}
                            </div>
                        </div>

                    <div class="form-group row mt-1">
                            {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label col-sm-2 text-end']) !!}
                            <div class="col-sm-10">
                                {!! Form::textArea('remarks', null, ['class'=>'form-control col-md-12 col-xs-12','placeholder'=>'Remarks...', 'rows' => '3']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        <div class="offset-sm-2 mt-2">
                            <button type="submit" class="btn btn-dark">{{ $outage->exists ? @"Update" : @"Submit" }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection