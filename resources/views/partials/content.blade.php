<div class="layout-cell layout-container" id="layout-body">
    <div class="layout-relative">
        <div class="layout">
            <!-- Content -->
            <div class="layout-row">
               <div class="body-content">
                       <!-- Flash Messages -->
                        @include('flash::message') 
                       @yield('content')
               </div>
            </div>
        </div>

    </div>
</div>