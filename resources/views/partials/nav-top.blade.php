@if (Sentry::check())
<div class="layout-row min-size">
<nav class="navbar control-toolbar navbar-mode-inline" id="layout-mainmenu" role="navigation">
<div class="toolbar-item toolbar-primary">
<div data-control="toolbar">
<a class="menu-toggle" href="javascript:;">
	<span class="menu-toggle-icon">
		<i class="icon-bars"></i>
	</span>
	<span class="menu-toggle-title">
    Blog                </span>
</a>
<ul class="nav mainmenu-nav">
	<li class=" svg-icon-container svg-active-effects">
		<a href="{{ route('home') }}">
			<span class="nav-icon">
				<img class="svg-icon" src="/svg/dashboard-icon.svg">
					<i class="svg-replace icon-dashboard"></i>
				</span>
				<span class="nav-label">
                Dashboard
                </span>
			</a>
		</li>
        <li class="{{ request()->is('resumes*') ? 'active' :'' }} svg-icon-container svg-active-effects">
			<a href="{{ route('resumes.index') }}">
				<span class="nav-icon">
				<img class="svg-icon" src="/svg/resume-icon.svg">
					<i class="svg-replace icon-pencil"></i>
				</span>
				<span class="nav-label">
				    Resumes
			    </span>
			</a>
		</li>
		@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
		<li class=" svg-icon-container svg-active-effects">
			<a href="{{ action('\\Sentinel\Controllers\UserController@index') }}">
				<span class="nav-icon">
						<i class="svg-replace icon-user"></i>
					</span>
					<span class="nav-label">
				        Users
			        </span>
				</a>
		</li>
		<li class=" svg-icon-container svg-active-effects">
			<a href="{{ action('\\Sentinel\Controllers\GroupController@index') }}">
				<span class="nav-icon">
						<i class="svg-replace icon-users"></i>
					</span>
					<span class="nav-label">
				        Groups
			        </span>
				</a>
			</li>
		  @endif

			</ul>
		</div>
	</div>

	<div class="toolbar-item">
		<ul class="mainmenu-toolbar">
	            <li class="mainmenu-preview with-tooltip">
                <a href="http://october.dev" target="_blank" title="" data-original-title="Preview the website">
                    <i class="icon-crosshairs"></i>
                </a>
            </li>
			 @if (Sentry::check())
				<li class="mainmenu-account"><a href="{{ route('sentinel.profile.show') }}">{{ Sentry::getUser()->email }}</a>
				</li>
				<li class="mainmenu-account">
					<a href="{{ route('sentinel.logout') }}">Logout</a>
				</li>
			   @endif
			<li class="mainmenu-account"></li>
		</ul>
	</div>
	</nav>
</div>
@endif