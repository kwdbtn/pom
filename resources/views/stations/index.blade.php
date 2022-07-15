@extends('layouts.main')

@section('content')
<div class="content">
    <div class="content">
        <div class="container">
            <h2 class="content-heading">Stations</h2>

            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Setup <small>- Stations</small></h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <a href="{{ route('stations.create') }}" class="btn btn-primary mr-5 mb-5"><i
                                    class="fa fa-plus mr-5"></i>Add New</a>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">#</th>
                                <th>Name</th>
                                <th class="text-center" style="width: 15%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($stations->isEmpty())
                            @else @foreach ($stations as $station)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="font-w600">{{ $station->name }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('stations.edit', $station) }}"
                                            class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit"><i
                                                class="fa fa-pencil"></i></a>
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