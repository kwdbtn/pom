@extends('layouts.main')

@section('content')
<div class="content">
    <div class="content">
        <div class="container">
            <h2 class="content-heading">Outages</h2>

            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Outages</small></h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <a href="{{ route('outages.create') }}" class="btn btn-primary mr-5 mb-5"><i
                                    class="fa fa-plus mr-5"></i>Add New</a>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">#</th>
                                <th>Type</th>
                                <th>Applicant</th>
                                <th>Equipment</th>
                                {{-- <th>Protection</th> --}}
                                <th>From</th>
                                <th>To</th>
                                <th>Relayed By</th>
                                <th>Received Date</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 5%;"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($outages->isEmpty())
                            @else @foreach ($outages as $outage)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="font-w600">{{ $outage->type }}</td>
                                <td class="font-w600">{{ $outage->applicantx()->name }}</td>
                                <td class="font-w600">{{ $outage->equipment->name }}</td>
                                {{-- <td class="font-w600">{{ $outage->protection->name }}</td> --}}
                                <td class="font-w600">{{ $outage->from }}</td>
                                <td class="font-w600">{{ $outage->to }}</td>
                                <td class="font-w600">{{ $outage->relayed_byx()->name }}</td>
                                <td class="font-w600">{{ $outage->received_date }}</td>
                                <td class="font-w600">{{ $outage->status }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('outages.edit', $outage) }}"
                                            class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Show"><i
                                                class="fa fa-eye"></i></a>
                                        {{-- <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip"
                                            title="Delete" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-times"></i>
                                            {!!
                                            Form::open(['method'=>'DELETE','hidden','route'=>['stations.destroy',$station]])
                                            !!}
                                            {!! Form::close() !!}</button> --}}
                                    </div>
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
    </div>
</div>
@endsection