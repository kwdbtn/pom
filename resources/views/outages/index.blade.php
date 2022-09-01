@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><strong>Outages</strong>
                <span class="float-right"><a href="{{ route('outages.create') }}" class="btn btn-sm btn-dark float-end">Add New</a></span>
            </h4>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-myDataTable table-report">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                                <th scope="col">Type</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Equipment</th>
                                <th scope="col">Protection</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Relayed By</th>
                                <th scope="col">Received</th>
                                <th scope="col">Approved</th>
                                <th scope="col">Status</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">***</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($outages->isEmpty())
                            @else @foreach ($outages as $outage)
                            <tr scope="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $outage->type }}</td>
                                <td>{{ $outage->applicant }}</td>
                                <td>
                                    @foreach ($outage->equipment as $equipment)
                                        <span class="badge bg-primary">{{ $equipment->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $outage->protection->name }}</td>
                                <td>{{ $outage->from }}</td>
                                <td>{{ $outage->to }}</td>
                                <td>{{ $outage->relayed_by }}</td>
                                <td>{{ $outage->received_byx() == "-" ? "-" : $outage->received_byx()->name . ' - '. $outage->created_at }}</td>
                                <td>{{ $outage->approved_byx() == "-" ? "-" : $outage->approved_byx()->name . ' - '. $outage->approval_date}}</td>
                                <td>{{ $outage->status }}</td>
                                <td>{{ $outage->remarks }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('outages.show', $outage) }}"
                                            class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Show"><i
                                                class="fa fa-eye"></i></a>
                                        @role('Planning')
                                            @if ($outage->status == "Pending" || $outage->status == "Dispatch Received")
                                                <a href="{{ route('outages.edit', $outage) }}"
                                                class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                            @endif
                                        @endrole
                                    </div>
                                </td>
                            </tr>
                            @endforeach @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection