<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body class="slim-container">
        <div id="layout-canvas">
            <div class="layout">

                <!-- Main Menu -->
                @include('partials.nav-top')

                
                <div class="layout-row">
                    <div class="layout flyout-container">
					
					   @yield('nav-left')

		                        <!-- Content Body -->
		                @include('partials.content')        
                    </div>
                </div>

            </div>
        </div>

        <!-- Flash Messages -->
        <div id="layout-flash-messages"></div>
<!-- Javascripts
================================================== -->
<script src="{{ asset('packages/rydurham/sentinel/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('packages/rydurham/sentinel/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('packages/rydurham/sentinel/js/restfulizer.js') }}"></script> 

<script src="/js/summernote.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#resume').summernote({
  height:300,
});
});
</script>
    </body>
</html>