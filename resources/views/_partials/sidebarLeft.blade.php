<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                        data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="{{ route('home') }}">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">PO</span><span
                                class="font-size-xl text-primary">M</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="#">
                        <img class="img-avatar" src="{{ asset('assets/img/avatars/avatar15.jpg') }}" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                                href="#">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                                data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="si si-logout"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a class="{{request()->is('/') ? 'active':''}}" href="{{ route('home') }}"><i
                                class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                        <a class="{{request()->is('outages*') ? 'active':''}}" href="{{ route("outages.index") }}"><i
                                class="si si-screen-smartphone"></i><span class="sidebar-mini-hide">Outages</span></a>
                        <a class="{{request()->is('about-us') ? 'active':''}}" href="#"><i
                                class="si si-users"></i><span class="sidebar-mini-hide">USERS</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span
                            class="sidebar-mini-hidden">SETUPS</span></li>
                    <li><a class="{{request()->is('setups/equipment*') ? 'active':''}}"
                            href="{{ route('equipment.index') }}"><i class="si si-puzzle"></i><span
                                class="sidebar-mini-hide">EQUIPMENT</span></a>
                    </li>
                    <li><a class="{{request()->is('setups/protection*') ? 'active':''}}" href="{{ route('protections.index') }}"><i
                                class="si si-energy"></i><span class="sidebar-mini-hide">PROTECTION</span></a></li>
                    <li><a class="{{request()->is('setups/station*') ? 'active':''}}"
                    href="{{ route('stations.index') }}"><i class="si si-layers"></i><span
                        class="sidebar-mini-hide">STATION</span></a></li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span
                            class="sidebar-mini-hidden">Application</span></li>
                    <li>
                        <a class="{{request()->is('applicants*') ? 'active':''}}"
                            href="#"><i class="si si-vector"></i><span
                                class="sidebar-mini-hide">Applicants</span></a>
                    </li>
                </ul>


                {{-- </ul> --}}
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>