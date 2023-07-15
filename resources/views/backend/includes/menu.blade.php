
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('backend.dashboard.index') }}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-user-injured"></i><span>Test</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.test.create') }}">Create</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.test.index')  }}">List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-piggy-bank"></i><span>Bank</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.test.create') }}">Create</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.test.index')  }}">List</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
