@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><strong>Equipment</strong>
                <span class="float-right"><a href="{{ route('equipment.create') }}" class="btn btn-sm btn-dark float-end">Add New</a></span>
            </h4>

            <div class="table-responsive table-striped">
                <table class="table table-bordered table-myDataTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($equipment->isEmpty())
                            @else @foreach ($equipment as $equipment)
                            <tr scope="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $equipment->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('equipment.show', $equipment) }}"
                                    class="btn btn-sm btn-outline-primary">View</a>
                                <a href="{{ route('equipment.edit', $equipment) }}"
                                class="btn btn-sm btn-outline-info">Edit</a>
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