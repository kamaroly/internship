<div class="layout-cell w-120">
    <div class="layout-relative">
        <nav id="layout-sidenav"
                    class="layout-sidenav bg-p">
            <ul class="nav">
                <li class="{{ request()->is('resumes/create') ? 'active' :'' }}">
                    <a href="{{ route('resumes.create') }}">
                        <span class="nav-icon">
                            <i class="icon-plus"></i>
                        </span>
                        <span class="nav-label">New Resume</span>
                    </a>
                    <span class="counter empty"></span>
                </li>
                
                <li class="{{ request()->is('resumes') ? 'active' :'' }}">
                    <a href="{{ route('resumes.index') }}">
                        <span class="nav-icon">
                            <i class="icon-list-ul"></i>
                        </span>
                        <span class="nav-label">Resumes</span>
                    </a>
                    <span class="counter empty"></span>
                </li>

                <li class="{{ request()->is('*favorites*') ? 'active' :'' }}">
                    <a href="{{ route('resumes.favorites') }}">
                        <span class="nav-icon">
                            <i class="icon-star"></i>
                        </span>
                        <span class="nav-label">Favorites</span>
                    </a>
                    <span class="counter empty"></span>
                </li>
            </ul>
        </nav>
    </div>
</div>