<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('project.create')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('storage/' . $footer->logo) }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('storage/' . $footer->logo) }}" alt="" height="28">
            </span>
        </a>

        <a href="{{route('project.create')}}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset('storage/' . $footer->logodark) }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('storage/' . $footer->logodark) }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <a href="{{route('bview.adm_index')}}">
                <li class="menu-title" data-key="t-menu">Dashboard</li>
                </a>

                <li>
                    <a href="{{ route('project.showss') }}">
                        <i class="bx bx-check-square icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">All Project</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('project') }}">
                        <i class="bx bx-check-square icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Add Project</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('about-us') }}">
                        <i class="bx bx-check-square icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Add a New About</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('about.all') }}">
                        <i class="bx bx-check-square icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">All About</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('contact-us')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Create a New Contact</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{route('contact.all')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">All Contact</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('home')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Create a new Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('home.all')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">All Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('footer')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Add a new Footer</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('footer.all')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">All Footer</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->