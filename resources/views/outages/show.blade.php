@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justified-content-center">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="card-body pb-2">
                    <h6>
                        <strong><span style="color: red">|</span>Application for Protection Guarantee</strong>
                        <span>
                            <a href="{{ route('outages.index') }}" class="btn btn-sm btn-dark float-end">Back</a>
                        </span>
                    </h6>
                    <small>{{ $outage->status }}</small>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card mt-0">
                        <div class="card-body">
                            <div class="form-group row">
                                {!! Form::label('applicant', 'Applicant:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('applicant', $outage->applicant, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}</h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('equipment', 'Equipment:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    @foreach ($outage->equipment as $equipment)
                                        <h6>{!! Form::label('equipment', $equipment->name, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}</h6>
                                    @endforeach
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('protection', 'Protection:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('protection', $outage->protection->name, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('work', 'Work to be done:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('work', $outage->work, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('from', 'From:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('from', $outage->from, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('to', 'To:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('to', $outage->from, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('relayed_by', 'Relayed by:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('relayed_by', $outage->relayed_byx()->name . ' - '. $outage->created_at, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('received_date', 'Received by:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    @if ($outage->received_byx() == "-")
                                        <h6>{!! Form::label('received_date', ' - ', ['class'=>'control-label
                                            col-md-12
                                            col-xs-12'])
                                            !!}
                                        </h6>
                                    @else
                                        <h6>{!! Form::label('received_date', $outage->received_byx()->name . ' - '. $outage->created_at, ['class'=>'control-label
                                            col-md-12
                                            col-xs-12'])
                                            !!}
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('approved_date', 'Approved by:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    @if ($outage->approved_byx() == "-")
                                        <h6>{!! Form::label('approved_date', ' - ', ['class'=>'control-label
                                            col-md-12
                                            col-xs-12'])
                                            !!}
                                        </h6>
                                    @else
                                        <h6>{!! Form::label('approved_date', $outage->approved_byx()->name . ' - '. $outage->approval_date, ['class'=>'control-label
                                            col-md-12
                                            col-xs-12'])
                                            !!}
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label col-sm-3']) !!}
                                <div class="col-sm-9">
                                    <h6>{!! Form::label('remarks', $outage->remarks, ['class'=>'control-label
                                        col-md-12
                                        col-xs-12'])
                                        !!}
                                    </h6>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                    <div class="card mt-0">
                        <div class="card-body">
                            <h6>All Remarks</h6>
                            <hr>
                            @foreach ($outage->remarksx as $remark)
                                <label for="remark">{{ $remark->remarks }} - <small>{{ $remark->created_at }}</small></label> <br>
                            @endforeach
                        </div>
                    </div>
                </div>

                @if (auth()->user()->user_group->name != "Operators")
            <div class="pr-0 mt-2">
                <div class="card mt-0">
                    <div class="card-body">
                        @if($outage->status == "Pending" || $outage->status == "Dispatch Received" || $outage->status = "Planning Approved")
                        <form action="{{ route('outages.approve', $outage) }}" method="POST">
                            @csrf
                            {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label col-sm-3']) !!}
                            <textarea name="remarks" id="" cols="30" rows="4" class="form-control"></textarea>

                            @if ($outage->status == "Pending")
                                @if (auth()->user()->user_group->name == "Dispatch")
                                    <Button type="submit" name="acknowledge" class="btn btn-sm btn-dark mt-1">Acknowledge</Button>
                                @endif

                                @if (auth()->user()->user_group->name == "Planning")
                                    <Button type="submit" name="approve" class="btn btn-sm btn-dark mt-1">Approve</Button>
                                @endif
                            @endif

                            @if ($outage->status == "Dispatch Received")
                                @if (auth()->user()->user_group->name == "Planning")
                                    <Button type="submit" name="approve" class="btn btn-sm btn-dark mt-1">Approve</Button>
                                @endif
                            @endif

                            @if ($outage->status == "Planning Approved")
                                @if (auth()->user()->user_group->name == "Planning")
                                    <Button type="submit" name="done" class="btn btn-sm btn-dark mt-1">Done</Button>
                                @endif
                            @endif
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection