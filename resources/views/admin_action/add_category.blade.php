@extends('layouts.admin_app')

@section('content')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Upload photos</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>Upload work</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class="row">
                <form method="post" action="{{url('/Add_category')}}" enctype="multipart/form-data">
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
                                <h3><i class="icon-feather-folder-plus"></i>Add a new Category</h3>
                            </div>
                                <div class="content with-padding padding-bottom-10">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Category name:   <i class="help-icon" data-tippy-placement="right" title="Any name that describes the Category"></i></h5>
                                                <div class="keywords-container">
                                                    <div class="keyword-input-container">
                                                        <input type="text" name="category" class="keyword-input with-border" placeholder="Name of the category here"/>
                                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                    </div>
                                                    <div class="keywords-list"></div>
                                                    <div class="clearfix"></div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <h5> Description:</h5>
                                                <textarea cols="30" rows="5" name="description" class="with-border"></textarea>
                                                <div class="uploadButton margin-top-30">
                                                    <input class="uploadButton-input1" type="file" name="image" id="upload1"/>
                                                    <label class="uploadButton-button ripple-effect" for="upload1">Upload Files</label>
                                                    <span class="uploadButton-file-name1">Upload category picture here</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>



                        </div>
                    </div>

                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>Add Category</button>
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


