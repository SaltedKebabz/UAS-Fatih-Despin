@extends('layouts.app')

@section('content')
<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" >Hello, I am</h4>
                <h1 class="header-title">{{ $profile->name }}</h1>
                <h6 class="header-mono" >Frond end Designer | Developer</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/avatar.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">John Doe</h5>
                        <div class="brand-subtitle">Web Designer | Developer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container-fluid">
    <div id="about" class="row about-section">
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Who am I ?</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">A Web Designer / Developer Located In Our Lovely Earth</h5>
            <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt consequatur fugit repellendusillo voluptas?</p>
            <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Personal Info</h3>
            <span class="line mb-5"></span>
            <ul class="mt40 info list-unstyled">
                <li><span>Birthdate</span> : 09/13/1996</li>
                <li><span>Email</span> : info@website.com</li>
                <li><span>Phone</span> : + (123) 456-7890</li>
                <li><span>Skype</span> : {{ $profile->name }} </li>
                <li><span>Address</span> :  12345 Fake ST NoWhere AB Country.</li>
            </ul>
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>UX Design</h6>
                    <p class="subtitle"> exercitat Repellendus,  corrupt.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Web Development</h6>
                    <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Digital Marketing</h6>
                    <p class="subtitle">voluptate commodi illo voluptatib.</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section contact" id="contact">
    <div id="map" class="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h4 class="contact-title">Send a message</h4>
                    <form action="">
                        <div class="form-group">
                            <input  class="form-control" type="text" placeholder="Name *" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email *" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id=" placeholder="Message *" rows="7" required></textarea>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="form-control btn btn-primary" >Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-mobile icon-md"></i>
                        </div>
                        <div class="col-10 ">
                            <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-map-alt icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-envelope icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
                        </div>
                    </div>
                    <ul class="social-icons pt-4">
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection