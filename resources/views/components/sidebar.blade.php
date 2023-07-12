<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder">Course Junction</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Course Management</span>
        </li>
        <li class="menu-item {{ Request::is('courses*') ? 'active' : '' }}">
            <a href="{{ route('courses.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-file-blank"></i>
                <div data-i18n="Analytics">Courses</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('materials*') ? 'active' : '' }}">
            <a href="{{ route('materials.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-file-blank"></i>
                <div data-i18n="Analytics">Course Materials</div>
            </a>
        </li>
    </ul>
</aside>
