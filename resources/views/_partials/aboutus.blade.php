@extends('layouts.main')

@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-primary">
        <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/img/various/bg-pattern.png');">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">Our Team</h1>
                    <h2 class="h4 font-w400 text-white-op">Get to know us</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full">
        <!-- Team -->
        {{--  <div class="row gutters-tiny py-20">
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar1.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Norbert Anku</div>
                        <div class="font-size-h5 text-muted">CEO</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar10.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Alfred Prah</div>
                        <div class="font-size-h5 text-muted">Director, MIS</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar14.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Nhyira</div>
                        <div class="font-size-h5 text-muted">Manager, Infrastructure & Operations</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar12.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Adwoa Koranteng</div>
                        <div class="font-size-h5 text-muted">Senior Finance Officer</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar13.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Akua Asantewaa</div>
                        <div class="font-size-h5 text-muted">Principal Electrical Engineer</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar9.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Kofi Ntim</div>
                        <div class="font-size-h5 text-muted">Junior IT Officer</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar6.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Abena Serwaa</div>
                        <div class="font-size-h5 text-muted">Manager, Field Operations</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar3.jpg" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">Kwame Boakye</div>
                        <div class="font-size-h5 text-muted">HR Officer</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="block text-center">
                    <div class="block-content">
                        <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar0.jpg" alt="Your photo">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="font-size-h4 font-w600 mb-0">You!</div>
                        <div class="font-size-h5 text-muted">Potential Employee</div>
                    </div>
                    <div class="block-content block-content-full bg-body-light">
                        <a class="btn btn-rounded btn-alt-primary" href="{{ route('applicants.create') }}">
        <i class="fa fa-pencil mr-5"></i>Apply Today!
        </a>
    </div>
    </div>
    </div>
    </div> --}}
    <!-- END Team -->

    <!-- Info -->
    <div class="block">
        <div class="block-content">
            <div class="row nice-copy">
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Who We <span
                            class="text-primary">Are</span></h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus
                        lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">What We <span
                            class="text-primary">Do</span></h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus
                        lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Why Join <span
                            class="text-primary">Us</span></h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                        adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus
                        lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-12 py-30">
                    <h3 class="h4 font-w700 text-uppercase text-center pb-10 border-b border-3x mb-0">Quick <span
                            class="text-primary">Statistics</span></h3>

                    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-briefcase fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="203"
                                data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Projects</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-users fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="57"
                                data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Clients</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-clock fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="15"
                                data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Years</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-badge fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="60"
                                data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->
    </div>
    <!-- END Page Content -->

    <!-- We are hiring -->
    <div class="bg-body-dark">
        <div class="content">
            <div class="py-50 nice-copy text-center">
                <h3 class="font-w700 mb-10">We Are Hiring!</h3>
                <h4 class="font-w400 text-muted mb-30">Would you like to join our team?</h4>
                <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-primary"
                    href="{{ route('applicants.create') }}">Get In Touch</a>
            </div>
        </div>
    </div>
    <!-- END We are hiring -->

</main>
@endsection