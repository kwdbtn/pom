@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                        <div class="col-md-4">
                            <h1><i class="fa fa-bolt"></i> Dashboard</h6>
                            <a class="application-link" href="{{ route('outages.index') }}">
                                <div class="card application-count mt-4">
                                    <div class="card-body">
                                        <h6>Total Applications</h6>
                                        <h1>{{ $arr['total'] }}</h1>
                                    </div>
                                </div>
                            </a>
                            <a class="application-link" href="{{ route('outages.outages', 'Pending') }}">
                                <div class="card application-count">
                                    <div class="card-body">
                                        <h6> Pending Applications</h6>
                                        <h1>{{ $arr['pending'] }}</h1>
                                    </div>
                                </div>
                            </a>
                            <a class="application-link" href="{{ route('outages.outages', 'Done') }}">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Completed Applications</h6>
                                    <h1>{{ $arr['done'] }}</h1>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    {!! $statuschart->container() !!}
                                    {!! $statuschart->script() !!}
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mt-6">
                            <div class="card-body">
                                    {!! $equipmentoutagechart->container() !!}
                                    {!! $equipmentoutagechart->script() !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-6">
                            <div class="card-body">
                                    {!! $outagefreqchart->container() !!}
                                    {!! $outagefreqchart->script() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection