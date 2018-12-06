@extends('layouts.admin_app')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Howdy, {{Auth::user()->name}}</h3>
                <span>We are glad to see you again!</span>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="{{'/'}}">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </nav>
            </div>

            <!-- Fun Facts Container -->
            <div class="fun-facts-container">
                <div class="fun-fact" data-fun-fact-color="#36bd78">
                    <div class="fun-fact-text">
                        <span>Total Uploaded File</span>
                        <h4>{{count($totalFile)}}</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                </div>
                <div class="fun-fact" data-fun-fact-color="#b81b7f">
                    <div class="fun-fact-text">
                        <span>Total Message</span>
                        <h4>{{count($all_Message)}}</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                </div>

                <!-- Last one has to be hidden below 1600px, sorry :( -->
                <div class="fun-fact" data-fun-fact-color="#2a41e6">
                    <div class="fun-fact-text">
                        <span>This Month Views</span>
                        <h4>987</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                </div>
            </div>

            <!-- Row -->

            <!-- Row / End -->

            <!-- Row -->

@endsection
