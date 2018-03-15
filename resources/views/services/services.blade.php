@extends('layouts.app')

@section('title','Services')

@push('stylesheets')
    <link href="{{ asset("css/services.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12 mx-auto">
        <h1 class="title text-center">Services</h1>
        <p class="description text-justify">Ibinex services are all characterised by high-level innovation made practical for your personalised exchange integration.</p>
        <p class="description text-justify">Our ecosystem of services comprises of the following units.</p>
        {{--<button class="semi-circle green"><span style="line-height:0">Request a Demo</span></button>--}}
    </section>
@endsection

@section('body-class','services')
@section('bg-img','services.png')
@section('content')
    <div class="container d-none d-sm-block pb-4">
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-white bg-white">
            <div class="container">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item px-4 active">
                        <a class="nav-link" href="#platform">Platform</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#CRMbackoffice">CRM Back Office</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#cryptoBridge">CryptoBridge&trade;</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#creditCard">Credit Card Processing</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#custodian">Custodian Accounts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row max-width-none">
            <div id="platform" class="col-12 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 macbook-img1 pt-4">
                            <img class="w-100" src="{{asset('img/l1.png')}}" alt="Cryptocurrency Graphs on Macbook">
                        </div>
                        <div class="col-12 col-sm-6 platform-text pt-5">
                            <div>
                                <span class="text-dark h1">Platform</span>
                                <p class="text-secondary text-justify pt-3 mb-sm-1 mt-sm-0">
                                    Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:
                                </p>
                            </div>
                            <div class="text-primary text-justify pb-5">
                                <strong>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Tailor-made private, institutional white label infatructure</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Fully-customisable front-end website</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Completely integrated web-based trading platform</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Flexible front-end user trading</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Performance-driven features</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Secure private cloud hosting</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Total compatibility with your own branding deck.</p>
                                </strong>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 bg-light  --> {{--#platform--}}


            <div id="CRMbackoffice" class="container-fluid crm-container">
                <div class="row max-width-none">
                    <div class="col-12 col-sm-6 bg-white crm">
                        <div class="inner-crm">
                            <div class="text-center text-sm-left pt-5 mt-3">
                                <span class="text-dark h1">CRM Back Office</span>
                            </div>
                            <div class="pt-4">
                                <p class="text-secondary text-sm-justify mt-sm-0 mb-sm-3">The Ibinex solution unites the front-end and platform with a full back office suit including CRM with:</p>
                            </div>
                            <div class="text-primary pb-3">
                                <strong>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">KYC/AML doccumentation collection</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Documentation verification</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Account and money management</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Optimised back-office administrative workflow</p>
                                    <p class="pt-3 pt-sm-1 mb-sm-1 mt-sm-0">Enhanced UI/UX</p>
                                </strong>
                            </div>
                        </div>
                    </div> <!-- /.col-12 bg-white crm -->
                    <div class="col-12 col-sm-6">
                        <div class="row pt-5 mt-2">
                            <div class="col-12 bg-white lorem px-0">
                                <div class="macbook-img l2">
                                    <!--                    <img src="assets/images/l2.png" alt="Macbook Laptop"> -->
                                </div>
                            </div> <!-- /.lorem -->
                            <img class="red-ellipse" src="{{asset('img/ellipse.png')}}" alt="Ellipse">

                            <div class="col-12 col-sm-10 text-white lorem-ipsum px-0">
                                <div class="inner-lorem px-3 pt-5">
                                    <p class="text-justify text-sm-left pt-4 pt-sm-0 mt-4 mt-sm-0 h4"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Distinctio praesentium ex possimus aspernatur consequatur dicta nemo.
                                        </em></p>
                                    <p>HuffPost</p>
                                </div>
                            </div> <!-- /.lorem -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-12 -->
                </div>
            </div> {{--#CRMbackoffice--}}



            <div id="cryptoBridge" class="col-12 cb px-0">
                <div class="container-fluid">
                    <div class="row max-width-none">
                        <div class="d-none d-sm-block col-sm-6 px-0 cb-logo">
                            <!--                 <img class="w-100" src="assets/images/cb.png" alt="CB logo"> -->
                        </div>
                        <div class="d-block d-sm-none col-12 cb1">

                        </div>
                        <div class="d-block d-sm-none col-12 cb2">

                        </div>
                        <div class="col-12 col-sm-6 cb-text">
                                <h1 class="text-dark">CryptoBridge<sup>&trade;</sup></h1>
                                <p class="text-justify text-sm-left pt-4 mt-3 mb-sm-5 pb-sm-5 mt-sm-0">Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite,
                                    CryptoBridge<sup>&trade;</sup>. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through
                                    CryptoBridge<sup>&trade;</sup> by Ibinex</p>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 CB logo--> {{--#cryptoBridge--}}


            <div id="creditCard" class="col-12 pt-5 bg-white px-md-0">
                <div class="container">
                    <div class="row max-width-none">
                        <div class="col-12 col-sm-6 col-md-6 d-none d-sm-block fone-img">
                            <!--                 <img class="w-100" src="assets/images/fone.png" alt="Phone"> -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 credit-card px-0 pt-sm-5 mt-sm-4">
                            <h1 class="pl-3">Credit Card Processing</h1>
                            <p class="text-justify pt-4 px-2 mt-sm-0">
                                We offer full spectrum payment processing for cryptocurrencies, and a complete selection that is unavailable elsewhere.
                                Exchanging your way with Ibinex means experiencing a whole new world of payment options including: credit cards, debit cards,
                                wire transfers, alternative payments, hosted wallets and cold wallets.
                            </p>
                            <img class="w-100" src="{{asset('img/cc.png')}}" alt="Credit Card">
                        </div>
                    </div>
                </div>
            </div> <!-- /.credit-card --> {{--#creditCard--}}

            <div id="custodian" class="col-12 custodian px-0 pt-4">
                <div class="container-fluid">
                    <div class="row max-width-none">
                        <div class="col-12 col-sm-6 custodian-left pb-4 pb-sm-0">
                            <h1>Custodian Accounts</h1>
                            <p class="normal-p text-justify mt-sm-0">
                                Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license.
                                We are proud to be the first to offer you:
                            </p>
                            <strong>
                                <p class="custodian-p pt-3 pt-sm-1 mb-sm-2 mt-sm-0">
                                    Fully-compliant licensed custodian proceeding and accounts
                                </p>
                                <p class="custodian-p pt-3 pt-sm-1 mb-sm-2 mt-sm-0">
                                    The choice to instead select a custodian of your choice
                                </p>
                                <p class="custodian-p pt-3 pt-sm-1 mb-sm-2 mt-sm-0">
                                    Payments via swipe-and-transmit from FIAT to base currency
                                </p>
                                <p class="custodian-p pt-3 pt-sm-1 mb-sm-2 mt-sm-0">
                                    Fully-compliant licensed custodian proceeding and accounts
                                </p>
                            </strong>
                        </div>
                        <div class="col-12 col-sm-6 px-0">
                            <div class="qtt-container">
                                <div class="col-12 qtt px-0">
                                    <!--<img class="qtt-img" src="" alt=""> -->
                                </div>
                                <img class="red-ellipse-2" src="{{asset('img/ellipse.png')}}" alt="Ellipse">
                                <div class="col-12 col-sm-10 text-white pb-4 pt-5 pt-sm-0 lorem-ipsum-lower">
                                    <p class="text-justify pt-5 h4 mt-sm-0"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Distinctio praesentium ex possimus aspernatur consequatur dicta nemo.
                                        </em></p>
                                    <p>HuffPost</p>
                                </div> <!-- /.lorem -->
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div>
            </div> <!-- /.col-12 custodian --> {{--#custodian--}}
        </div> <!-- /.row -->
    </div>
@endsection