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
                <form method="post" action="{{url('/uploadpicture')}}" enctype="multipart/form-data">
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
                                <h3><i class="icon-feather-folder-plus"></i>Upload your work here</h3>
                            </div>
                            @for($i = 1 ; $i<=1; $i++)
                                <div class="content with-padding padding-bottom-10">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Project's name:   <i class="help-icon" data-tippy-placement="right" title="Any name that describes the project"></i></h5>
                                                <div class="keywords-container">
                                                    <div class="keyword-input-container">
                                                        <input type="text" name="{{'project'.$i}}" class="keyword-input with-border" placeholder="Name of the project here"/>
                                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                    </div>
                                                    <div class="keywords-list"><!-- keywords go here --></div>
                                                    <div class="clearfix"></div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-xl-6">
                                            <div class="submit-field">
                                                <h5>Photo Category</h5>
                                                <select class="selectpicker with-border" name="{{'category'.$i}}" title="Select Category">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>




                                        <div class="col-xl-12">
                                            <div class="submit-field">
                                                <div class="uploadButton margin-top-30">
                                                    <input class=" {{'uploadButton-input'.$i}}" type="file" name="{{'image'.$i}}" id="{{'upload'.$i}}"/>
                                                    <label class="uploadButton-button ripple-effect" for="{{'upload'.$i}}">Upload Files</label>
                                                    <span class="{{'uploadButton-file-name'.$i}}">Upload the file here</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endfor


                        </div>
                    </div>

                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Upload Pictures</button>
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
