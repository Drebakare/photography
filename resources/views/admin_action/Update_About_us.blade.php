@extends('layouts.admin_app')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Update About Us</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>Update About Us</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class="row">
                <form method="post" action="{{url('/admin/update_about_us')}}" enctype="multipart/form-data">
                @csrf
                <!-- Dashboard Box -->
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
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">

                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-feather-folder-plus"></i>Update About Us</h3>
                            </div>
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Title:</h5>
                                            <textarea cols="30" rows="5" name="title" class="with-border"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5> Body:</h5>
                                            <textarea cols="30" rows="5" name="body" class="with-border"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <div class="uploadButton margin-top-30">
                                                <input class=" {{'uploadButton-input1'}}" type="file" name="{{'image1'}}" id="{{'upload1'}}"/>
                                                <label class="uploadButton-button ripple-effect" for="{{'upload1'}}">Upload Files</label>
                                                <span class="{{'uploadButton-file-name1'}}">Upload about us picture here</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>



                        </div>
                    </div>

                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>Update contact Info</button>
                    </div>
                </form>

            </div>
            <!-- Row / End -->

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
