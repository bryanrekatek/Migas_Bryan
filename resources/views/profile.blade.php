@extends('layouts.app')

@section('content')
<div class="container">
    <!-- header area start -->
{{--    <div class="header-area">--}}
{{--        <div class="row align-items-center">--}}
{{--            <!-- nav and search button -->--}}
{{--            <div class="col-md-6 col-sm-8 clearfix">--}}
{{--                <div class="nav-btn pull-left">--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                </div>--}}
{{--                <div class="search-box pull-left">--}}
{{--                    <form action="#">--}}
{{--                        <input type="text" name="search" placeholder="Search..." required>--}}
{{--                        <i class="ti-search"></i>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- profile info & task notification -->--}}
{{--            <div class="col-md-6 col-sm-4 clearfix">--}}
{{--                <ul class="notification-area pull-right">--}}
{{--                    <li id="full-view"><i class="ti-fullscreen"></i></li>--}}
{{--                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">--}}
{{--                            <span>2</span>--}}
{{--                        </i>--}}
{{--                        <div class="dropdown-menu bell-notify-box notify-box">--}}
{{--                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>--}}
{{--                            <div class="nofity-list">--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>You have Changed Your Password</p>--}}
{{--                                        <span>Just Now</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>New Commetns On Post</p>--}}
{{--                                        <span>30 Seconds ago</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Some special like you</p>--}}
{{--                                        <span>Just Now</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>New Commetns On Post</p>--}}
{{--                                        <span>30 Seconds ago</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Some special like you</p>--}}
{{--                                        <span>Just Now</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>You have Changed Your Password</p>--}}
{{--                                        <span>Just Now</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>You have Changed Your Password</p>--}}
{{--                                        <span>Just Now</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>--}}
{{--                        <div class="dropdown-menu notify-box nt-enveloper-box">--}}
{{--                            <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>--}}
{{--                            <div class="nofity-list">--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img1.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">Hey I am waiting for you...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img2.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">When you can connect with me...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img3.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">I missed you so much...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img4.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">Your product is completely Ready...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img2.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">Hey I am waiting for you...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img1.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">Hey I am waiting for you...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="notify-item">--}}
{{--                                    <div class="notify-thumb">--}}
{{--                                        <img src="{{ asset('assets/assets/images/author/author-img3.jpg') }}" alt="image">--}}
{{--                                    </div>--}}
{{--                                    <div class="notify-text">--}}
{{--                                        <p>Aglae Mayer</p>--}}
{{--                                        <span class="msg">Hey I am waiting for you...</span>--}}
{{--                                        <span>3:15 PM</span>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="settings-btn">--}}
{{--                        <i class="ti-settings"></i>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- header area end -->
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
{{--                <div class="breadcrumbs-area clearfix">--}}
{{--                    <h4 class="page-title pull-left">Dashboard</h4>--}}
{{--                    <ul class="breadcrumbs pull-left">--}}
{{--                        <li><a href="index.html">Home</a></li>--}}
{{--                        <li><span>Dashboard</span></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{ asset('assets/assets/images/author/avatar.png') }}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- Textual inputs start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Profile</h4>
{{--                                <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>--}}
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" value="{{ Auth::user()->name }}" id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-search-input" class="col-form-label">Alamat</label>
                                    <input class="form-control" type="search" value="{{ Auth::user()->alamat }}" id="example-search-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Nomor Induk Kependudukan</label>
                                    <input class="form-control" type="email" value="{{ Auth::user()->nik }}" id="example-email-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-url-input" class="col-form-label">Akun Repositori</label>
                                    <input class="form-control" type="url" value="{{ Auth::user()->repo }}" id="example-url-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Textual inputs end -->
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
