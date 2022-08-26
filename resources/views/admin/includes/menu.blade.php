<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{--User Module Start--}}
                @if(auth()->user()->access_label == 2)
                 <li>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User Module
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('users.create')}}">Add User</a>
                            <a class="nav-link" href="{{route('users.index')}}">Manage User</a>
                        </nav>
                    </div>
                 </li>
                @endif
                {{--User Module End--}}

                {{--Teacher Module Start--}}
                @if(auth()->user()->access_label == 1)
                <li>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#teacher" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Teacher Module
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="teacher" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('edit-profile') }}">Edit Profile</a>
                        </nav>
                    </div>
                </li>
                @endif
                {{--Teacher Module End--}}

                {{--Course Module Start--}}
                @if(auth()->user()->access_label != 0)
                    <li>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#course" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Course Module
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="course" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('courses.create') }}">Add Course</a>
                                <a class="nav-link" href="{{ route('courses.index') }}">Manage Course</a>
                            </nav>
                        </div>
                    </li>
                @endif
                {{--Course Module End--}}

                {{--Student Module Start--}}
                @if(auth()->user()->access_label == 0)
                    <li>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#student" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Student Module
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="student" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('edit-profile') }}">Update Profile</a>
                            </nav>
                        </div>
                    </li>
                @endif
                {{--Student Module End--}}

                {{--Enroll Module Start--}}
                @if(auth()->user()->access_label == 2)
                    <li>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#enroll" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Enroll Module
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="enroll" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('manage-enroll') }}">Manage Enroll</a>
                            </nav>
                        </div>
                    </li>
                @endif
                {{--Enroll Module End--}}

            </div>
        </div>
    </nav>
</div>
