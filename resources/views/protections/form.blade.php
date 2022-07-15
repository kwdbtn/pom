@extends('layouts.main')

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="container">
        <h2 class="content-heading">Protections</h2>
        <div class="row justified-content-center">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            {{ $protection->exists ? "Editing '".$protection->name."'" : "New protection" }}
                        </h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <a href="{{ route('protections.index') }}" class="btn btn-secondary mr-5 mb-5"><i
                                        class="fa fa-arrow-left mr-5"></i>Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        {!! Form::model($protection, ['method' => $protection->exists ? 'put' : 'post',
                        'route' => $protection->exists ? ['protections.update', $protection] :
                        ['protections.store'],
                        'class' => 'form-horizontal'])
                        !!}
                        <div class="form-group row">
                            {!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-3 text-right']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('name',null,['class'=>'form-control col-md-12 col-xs-12
                                ','placeholder'=>'protection', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-9 ml-auto">
                                <button type="submit"
                                    class="btn btn-alt-primary">{{ $protection->exists ? @"Update" : @"Create" }}</button>
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