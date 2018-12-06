<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEST</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{asset('_landing/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('_landing/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('_landing/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('_landing/img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('_landing/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('_landing/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('_landing/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('_landing/css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('_landing/css/nivo-lightbox/default.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('_landing/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('_landing/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top">CLIK Managersk</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="#services" class="page-scroll">Services</a></li>
                <li><a href="#portfolio" class="page-scroll">Projects</a></li>
                <li><a href="#team" class="page-scroll">Team</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h2 style="color:white;">We communicate your Brand through story based contents,</h2>
                        <p> We hold your Brand dearly for what it stands for.</p>
                        <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Our Story</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 text-center"> <img src="{{'/uploads/'.$getAboutUs->image}}" class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h3>The Studio</h3>
                    <p>{{$getAboutUs->title}}</p>
                    <h3>How We Work</h3>
                    <p>{{$getAboutUs->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section -->
<div id="services">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 section-title text-center">
            <h2>Our Services</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
        </div>
        <div class="row">
            @foreach($allCategories as $allCategory)
            <div class="col-xs-12 col-sm-4 service" > <img src="{{'/uploads/'.$allCategory->image}}" style="height: 250px;" class="img-responsive" alt="Project Title">
                <h3>{{$allCategory->category}}</h3>
                <p>{{$allCategory->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Projects</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All Projects</a></li>
                        @foreach($allCategories as $allCategory)
                        <li><a href="#" data-filter=".{{$allCategory->category}}">{{$allCategory->category}}</a></li>
                        @endforeach
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">
                @foreach($totalFiles as $totalFile)
                <div class="col-sm-6 col-md-4 col-lg-4 {{$totalFile->category->category}}">
                    <div class="portfolio-item">
                        <div class="hover-bg"><a href="{{'/uploads/'.$totalFile->ImageName}}" title="{{$totalFile->ProjectName}}" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>{{$totalFile->ProjectName}}</h4>
                                </div>
                                <img src="{{'/uploads/'.$totalFile->ImageName}}" class="img-responsive" alt="{{$totalFile->ProjectName}}  " style="height:250px; width:350px;"> </a> </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 section-title">
                <h2>Meet the Team</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
            </div>
            <div id="row">
                <div class="col-md-3 col-sm-6 team">
                    <div class="thumbnail"> <img src="{{asset('_landing/img/team/01.jpg')}}" alt="..." class="team-img">
                        <div class="caption">
                            <h3>John Doe</h3>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 team">
                    <div class="thumbnail"> <img src="{{asset('_landing/img/team/01.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Mike Doe</h3>
                            <p>Senior Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 team">
                    <div class="thumbnail"> <img src="{{asset('_landing/img/team/01.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jane Doe</h3>
                            <p>Senior Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 team">
                    <div class="thumbnail"> <img src="{{asset('_landing/img/team/01.jpg')}}" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Karen Doe</h3>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="section-title text-center">
            <h2>Contact Us</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
        </div>
        <div class="col-md-4">
            <h3>Contact Info</h3>
            <div class="contact-item"> <span>Address</span>
                <p>{{$contact->address}}<br>
                    </p>
            </div>
            <div class="contact-item"> <span>Email</span>
                <p>{{$contact->email}}</p>
            </div>
            <div class="contact-item"> <span>Phone</span>
                <p>{{$contact->phone_number}}</p>
            </div>
        </div>
        <div class="col-md-8">
            <h3>Leave us a message</h3>
            <form name="sentMessage" id="sentMessage" novalidate  method="post" action="{{url('/send_message')}}">
                @csrf

                <div class="row">
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
                        <div class="alert alert-success" style="margin-top: 10px; margin-left: 10px;">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
            </form>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container text-center">
        <div class="social">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <div>
            <p>&copy; 2016 NEST. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
    </div>
</div>
<script>

    @if(session('failure')||session('success'))
    $(document).on('ready', function() {
        window.location.hash = '#sentMessage';
    })
    @endif
</script>
<script type="text/javascript" src="{{asset('_landing/js/jquery.1.11.1.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/nivo-lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/jqBootstrapValidation.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/contact_me.js')}}"></script>
<script type="text/javascript" src="{{asset('_landing/js/main.js')}}"></script>
</body>
</html>

