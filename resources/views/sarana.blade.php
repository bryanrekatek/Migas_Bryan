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
{{--                        <a class="dropdown-item" href="#">Log Out</a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
{{--
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Table Default</h4>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start Date</th>
                                    <th>salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>29</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>21</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>29</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>21</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
--}}
            <!-- data table end -->
        </div>
    </div>
</div>
@endsection
