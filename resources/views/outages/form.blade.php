@extends('layouts.main')

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="container">
        <h2 class="content-heading">Application for Protection Guidelines</h2>
        <div class="row justified-content-center">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            {{ $outage->exists ? "Editing Outage" : "New Outage" }}
                        </h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <a href="{{ route('outages.index') }}" class="btn btn-secondary mr-5 mb-5"><i
                                        class="fa fa-arrow-left mr-5"></i>Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        {!! Form::model($outage, ['method' => $outage->exists ? 'put' : 'post',
                        'route' => $outage->exists ? ['outages.update', $outage] :
                        ['outages.store'],
                        'class' => 'form-horizontal'])
                        !!}
                        <div class="form-group row">
                            {!! Form::label('type', 'Type:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {{Form::select('type', $types, null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('equipment_id', 'Equipment:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {{Form::select('equipment_id', $arr['equipment'], null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('protection_id', 'Protection:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {{Form::select('protection_id', $arr['protections'], null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('work', 'Work to be done:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {!! Form::textArea('work', null, ['class'=>'form-control col-md-12 col-xs-12','placeholder'=>'Work to be done...', 'rows' => '3']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                        {!! Form::label('from', 'From:', ['class' => 'control-label col-sm-2 text-right']) !!}
                        <div class="col-sm-10">
                            <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                {!! Form::text('from', null, ['class'=>'js-datepicker form-control col-md-12 col-xs-12','placeholder'=>'Start Date', 'data-target'=>'#datetimepicker7', 'data-autoclose'=>'true', 'data-today-highlight'=>'true', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        {!! Form::label('to', 'To:', ['class' => 'control-label col-sm-2 text-right']) !!}
                        <div class="col-sm-10">
                            <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                {!! Form::text('to', null, ['class'=>'js-datepicker form-control col-md-12 col-xs-12','placeholder'=>'End Date', 'data-target'=>'#datetimepicker8', 'data-autoclose'=>'true', 'data-today-highlight'=>'true', 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                            {!! Form::label('relayed_by', 'Relayed By:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {{Form::select('relayed_by', $arr['relayed_by'], null, ['class' => 'form-control col-md-12 col-xs-12'])}}
                            </div>
                    </div>

                    <div class="form-group row">
                            {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label col-sm-2 text-right']) !!}
                            <div class="col-sm-10">
                                {!! Form::textArea('remarks', null, ['class'=>'form-control col-md-12 col-xs-12','placeholder'=>'Remarks...', 'rows' => '3']) !!}
                            </div>
                        </div>

                    <div class="form-group row">
                            <div class="col-lg-10 ml-auto">
                                <button type="submit"
                                    class="btn btn-alt-primary">{{ $outage->exists ? @"Update" : @"Create" }}</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- END Horizontal Form -->
            </div>
        </div>
    </div>
</div>
@endsection