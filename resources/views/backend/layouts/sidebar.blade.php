        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('admin/dashboard')}}">
                    <img src="https://cdn.mypanel.link/m8x6dz/ayprqo756mmg8dj2.png" alt="verified-campaign.net">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{route('admin.dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('admin.category')}}">
                                <i class="fas fa-list"></i>Category</a>
                        </li>
                        <li>
                            <a href="{{route('admin.coupon')}}">
                                <i class="fas fa-tag"></i>Coupon</a>
                        </li>
                        <li>
                            <a href="{{route('admin.services')}}">
                                <i class="fas fa-shopping-bag"></i>Services</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->