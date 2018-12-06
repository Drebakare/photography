
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>Yaami</title>
    <meta name="description" content="HTML Responsive Landing Page Template for Stock Photo Online Based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="microstock, photo, stockphoto, photography, footage, vector, free photo, free image, photostock" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/colors/blue.css')}}">
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('../../dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>
<body class="gray">
<div id="wrapper" class="main">
    @include('layouts.include.header')
    <div class="clearfix"></div>
    <div class="dashboard-container">
        <div class="dashboard-sidebar">
            <div class="dashboard-sidebar-inner" data-simplebar>
                <div class="dashboard-nav-container">

                    <!-- Responsive Navigation Trigger -->
                    <a href="#" class="dashboard-responsive-nav-trigger">
                        <span class="hamburger hamburger--collapse" >
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                        <span class="trigger-title">Dashboard Navigation</span>
                    </a>

                    <!-- Navigation -->
                    <div class="dashboard-nav">
                        <div class="dashboard-nav-inner">

                            <ul data-submenu-title="Start">
                                    <li class="active"><a href="{{url('/admin')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="{{url('/admin/read_message')}}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">{{count($all_Message)}}</span></a></li>
                                    <li><a href="{{url('/admin/upload_photos')}}"><i class="icon-material-outline-add-a-photo"></i>Upload Photos</a></li>
                                    <li><a href="{{url('/admin/add_category')}}"><i class="icon-material-outline-add"></i>Add Category</a></li>
                                    <li><a href="{{url('/admin/update_contact')}}"><i class="icon-feather-arrow-up-circle"></i>Update Contact Address</a></li>
                                    <li><a href="{{url('/admin/update_about_us')}}"><i class="icon-feather-arrow-up-circle"></i>Update About Us</a></li>


                            </ul>



                            <ul data-submenu-title="Account">
                                <li><a href="{{'/logout'}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- Navigation / End -->

                </div>
            </div>
        </div>
        @yield('content')

    </div>


</div>

<script src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('dashboard/js/mmenu.min.js')}}"></script>
<script src="{{asset('dashboard/js/tippy.all.min.js')}}"></script>
<script src="{{asset('dashboard/js/simplebar.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('dashboard/js/snackbar.js')}}"></script>
<script src="{{asset('dashboard/js/clipboard.min.js')}}"></script>
<script src="{{asset('dashboard/js/counterup.min.js')}}"></script>
<script src="{{asset('dashboard/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('dashboard/js/slick.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>
<script>
    @if(session('failure'))
    $(document).on('ready', function(){
        $.magnificPopup.open({
            items:{
                src: '#sign-in-dialog',
                type: 'inline'
            },
            mainClass:'main'

        });
    })
    @endif

</script>

<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function(){
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>

<!-- Google API -->
<script src="../../../maps.googleapis.com/maps/api/js601c?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>
</body>
</html>

