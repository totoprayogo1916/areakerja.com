<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>

        </ul>
    </div>
    <ul class="navbar-nav navbar-right">


        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                @if (App\Role_User::where('user_id', auth()->user()->id)->first()->role_id == 3)
                    <span style="color: #fe7b54">{{ $mitra->koin }} AKC</span>
                @endif
                <i class="fas fa-coins" style="color: #fe7b54"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <span class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                        </span> <span class="dropdown-item-desc"> Template update is
                            available now! <span class="time">2 Min
                                Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i
                                class="far
                                              fa-user"></i>
                        </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                Sugiharto</b> are now friends <span class="time">10 Hours
                                Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                                class="fas
                                              fa-check"></i>
                        </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                            moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                Hours
                                Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                                class="fas fa-exclamation-triangle"></i>
                        </span> <span class="dropdown-item-desc"> Low disk space. Let's
                            clean it! <span class="time">17 Hours Ago</span>
                        </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i
                                class="fas
                                              fa-bell"></i>
                        </span> <span class="dropdown-item-desc"> Welcome to Otika
                            template! <span class="time">Yesterday</span>
                        </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>


        <li class="dropdown"><a href="#" data-toggle="dropdown" {{-- {{ url('img/mitralogo') }}/{{ $mitra->logo }} --}}
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                    src="{{ url('image') }}/{{ $mitra->logo }}" class="user-img-radious-style"> <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Hello {{ $mitra->nama }}</div>
                <div class="dropdown-divider"></div>
                <a href="{{ route('mitra.out') }}" class="dropdown-item has-icon text-danger"> <i
                        class="fas fa-sign-out-alt"></i>
                    Logout
                </a>

            </div>
        </li>
    </ul>
</nav>
