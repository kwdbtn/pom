@extends('layouts.main')

@section('content')
<main id="main-container">
    <!-- Page Content -->
    <!-- User Info -->
    <div class="bg-image bg-image-bottom"
        style="background-image: url('{{ asset('assets/img/photos/photo13@2x.jpg') }}');">
        <div class="bg-primary-dark-op py-30">
            <div class="content content-full text-center">
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link" href="#">
                        <img class="img-avatar img-avatar96 img-avatar-thumb"
                            src="{{ asset('assets/img/avatars/avatar15.jpg') }}" alt="">
                    </a>
                </div>
                <!-- END Avatar -->

                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-10">{{ $applicant->fullName }}</h1>
                <h2 class="h5 text-white-op">
                    {{ $applicant->email }}
                </h2>
                <h2 class="h5 text-white-op"> {{Carbon::createFromFormat('Y-m-d',
                    $applicant->date_of_birth)->toFormattedDateString()}}
                </h2>
                <h2 class="h5 text-white-op">
                    <span class="text-primary-light">{{ $applicant->job->name }}</span>
                </h2>
                <h2 class="h5 text-white-op">
                    {{ $applicant->phone_number }} @ {{ $applicant->location }}
                </h2>
                <!-- END Personal -->

                <!-- Actions -->

                <a class="btn btn-rounded btn-hero btn-sm btn-alt-success mb-5"
                    href="{{ route('applicants.cv', $applicant) }}"><i class="fa fa-plus mr-5"></i> CV</a>

                <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5"
                    href="{{ route('applicants.cover-letter', $applicant) }}"><i class="fa fa-plus mr-5"></i> Cover
                    Letter</a>

                <a class="btn btn-rounded btn-hero btn-sm btn-alt-primary mb-5" href="{{ $applicant->linkedin }}"><i
                        class="fa fa-linkedin-square"></i>
                    LinkedIn</a>


                {{-- <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-primary mb-5">
                    <i class="fa fa-envelope-o mr-5"></i> Message
                </button> --}}
                <!-- END Actions -->
            </div>
        </div>
    </div>
    <!-- END User Info -->

    <!-- Main Content -->
    <div class="content">
        <!-- Projects -->
        <h2 class="content-heading">
            {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button> --}}
            <i class="si si-briefcase mr-5"></i> Certifications
        </h2>
        <div class="row items-push">
            @foreach ($applicant->certifications as $certification)
            <div class="col-md-6 col-xl-3">
                <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                    <div class="block-content block-content-full">
                        <div class="item item-circle bg-success text-success-light mx-auto my-20">
                            <i class="fa fa-certificate"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-w600 mb-5">{{ $certification->name }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- END Projects -->

        <!-- Colleagues -->
        <h2 class="content-heading">
            {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button> --}}
            <i class="si si-disc mr-5"></i> Skills
        </h2>
        <div class="col-md-12">
            <div class="block">
                <div class="block-content">
                    <p>{{ $applicant->skills }}</p>
                </div>
            </div>
        </div>

        <!-- END Colleagues -->

        <!-- Articles -->
        <h2 class="content-heading">
            {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View CV</button> --}}
            <i class="fa fa-shirtsinbulk"></i> Salary
        </h2>
        <div class="col-md-12">
            <div class="block">
                <div class="block-content">
                    <p>{{ $applicant->salary }} ({{ $applicant->is_negotiable ? @"Negotiable" : @"Non-negotiable" }})
                    </p>
                </div>
            </div>
        </div>

        <!-- END Articles -->
    </div>
    <!-- END Main Content -->
    <!-- END Page Content -->
</main>
@endsection