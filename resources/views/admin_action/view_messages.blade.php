@extends('layouts.admin_app')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Recieved Messages</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>View Messages</li>
                    </ul>
                </nav>
            </div>

            <div class="col-xl-12 col-md-12 ">

                <div class="section-headline margin-bottom-30">
                    <h4>All Messages</h4>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"  style="margin-top: 10px; margin-left: 10px;">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    @if(session('failure'))
                        <div class="alert alert-danger" style="margin-top: 10px; margin-left: 10px;">
                            {{session('failure')}}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success" style=" margin-top: 10px; margin-left: 10px;">
                            {{session('success')}}
                        </div>
                    @endif
                </div>

                <table class="basic-table">

                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Message</th>
                        <th>Date Received</th>
                        <th>Action</th>
                    </tr>
                    @foreach($messages as $message)
                    <tr>
                        <td data-label="Column 1">{{$message->id}}</td>
                        <td data-label="Column 2">{{$message->name}}</td>
                        <td data-label="Column 3">{{$message->email}}</td>
                        <td data-label="Column 4">{{$message->messsage}}</td>
                        <td data-label="Column 5">{{$message->created_at}}</td>
                        <td data-label="Column 6">	<a href="{{route('message.delete', ['id'=> $message->id])}}" class="button gray ripple-effect">Delete</a></td>

                    </tr>
                    @endforeach

                </table>
                {{$messages->links()}}
            </div>


            <!-- Footer -->
            <div class="dashboard-footer-spacer"></div>
            <div class="small-footer margin-top-15">
                <div class="small-footer-copyrights">
                    © 2018 <strong>Hireo</strong>. All Rights Reserved.
                </div>
                <ul class="footer-social-links">
                    <li>
                        <a href="#" title="Facebook" data-tippy-placement="top">
                            <i class="icon-brand-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter" data-tippy-placement="top">
                            <i class="icon-brand-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Google Plus" data-tippy-placement="top">
                            <i class="icon-brand-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="LinkedIn" data-tippy-placement="top">
                            <i class="icon-brand-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Footer / End -->

        </div>
    </div>
@endsection
