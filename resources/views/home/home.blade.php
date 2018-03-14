@extends('layouts.app')

@section('title','Home')


@push('stylesheets')
    <link href="{{ asset("css/home.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12">
        <h1 class="title text-left">Introducing CryptoBridge™</h1>
        <p class="description text-justify">Our patent-pending proprietary software, CrpytoBridge, is the nexus that aggregates premier cryptocurrency exchangs and indexes for your customers, in real-time.</p>
        <p class="description text-justify">The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select cryptocurrency exchanges and most attractive live prices - only available via the Ibinex trading platform.</p>
        <button class="semi-circle green"><span style="line-height:0">Request a Demo</span></button>
    </section>
@endsection

@section('content')
    <section id="second-fold" class="container-fluid bg-color-grey">
        <section class="row no-gutters pt-5 position-relative fixed-height">
            <!--Will remove fixed-height -->
            <aside class="col-xl-8 order-xl-2 d-none d-lg-block d-xl-block position-absolute stick-right">
                <img class="" src="https://i.imgur.com/qHjq1P1.png" height="520" alt="bootstrap">
            </aside>
            <div class="col-xl-6 order-xl-1 pt-5">
                <h2 class="title text-left">Ibinex - The Gateway to your Own Customised Cryptocurrency Ecosystem</h2>
                <p class="text-justify">With an in-depth understanding of evolving blockchain technology and cryptocurrency development, Iniex invite you to engage with a fully-customisable, private, institutional white label platform. Trailblazing turnkey solutions to merge with
                    your own web-based platform, Ibinex, will show you definitely how to build a cryptocurrency exchange, your way.</p>
            </div>
        </section>
    </section>


    <!-- 2 -->
    <section id="third-fold" class="container-fluid bg-color-white mb-5">
        <section class="row pt-5 position-relative">
            <div class="col-xl-6 order-xl-12">
                <h2 class="title text-left">
                    <span>Exchange your Way with Ibinex.</span><br>
                    <span>Your Turn-Key Solution Includes:</span>
                </h2>

                <section class="pt-3">
                    <h2 class="sub-title blue">Tailored Front End content website</h2>
                    <p class="description text-justify">Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand, the Ibinex solution showcases enhanced practicality and performance driven features.</p>
                </section>

                <section class="pt-3">
                    <h2 class="sub-title blue">Tailored Front End content website</h2>
                    <p class="description text-justify">The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account & money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.</p>
                </section>

            </div>

            <aside class="col-xl-6 order-xl-1 position-relative">
                <img class="raise-image" src="https://i.imgur.com/3nSwpAa.png" height="520" alt="bootstrap">
            </aside>

        </section>
    </section>

    <!--3 -->
    <section id="fourth-fold" class="container-fluid bg-color-grey mb-5 position-relative">
        <section class="row embed-parent">
            <div class="col-xl-6 order-xl-1">
                <section class="pt-3">
                    <h2 class="sub-title blue">Aggregated Liquidity Exchange</h2>
                    <p class="description text-justify">Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.</p>
                </section>

                <section class="pt-3">
                    <h2 class="sub-title blue">Complete processing solution</h2>
                    <p class="description text-justify">With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilies for your exchange to thrive in maximum liquidity.</p>
                </section>
            </div>


            <aside class="col-xl-6 order-xl-12 embed-parent-wrap top right">
                <div class="embed-image" style="background-image: url('https://i.imgur.com/vxYWbMb.png');">&nbsp;</div>
                <div class="embed-blue-wrap shadow">
                    <div class="faButton top-half red shadow"></div>
                    <section class="my-5 mx-3">
                        <p class="quote text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <span class="author">HuffPost</span>
                    </section>
                </div>
            </aside>


        </section>
    </section>

    <!--4 -->
    <section id="fifth-fold" class="container-fluid position-relative">
        <section class="row embed-parent">

            <div class="col-xl-6 order-xl-2">
                <h2>title</h2>

                <span>sub-title</span>
                <p>description</p>

                <span>sub-title</span>
                <p>description</p>
            </div>

            <aside class="col-xl-6 order-xl-1 embed-parent-wrap left">
                <div class="embed-image halfed shadow" style="background-image: url('https://i.imgur.com/hN17jUY.png');">&nbsp;</div>
                <div class="faButton raise-half">fa-quote</div>
            </aside>
        </section>
    </section>

    <!--5 -->
    <section id="sixthFold" class="row">
        <header>
            <h3>sub-title</h3>
            <h2>title</h2>
        </header>

        <section id="downloadables">
            <div class="">
                <!-- 1 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>

            <div class="">
                <!-- 2 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>


            <div class="">
                <!-- 3 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>


            <div class="">
                <!-- 4 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>


            <div class="">
                <!-- 5 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>


            <div class="">
                <!-- 6 -->
                image
                <h3>title</h3>
                <span>details</span>
                <button>download</button>
            </div>
        </section>

    </section>

    <section id="seventhFold">
        <header>
            <h2>title</h2>
        </header>
        <section id="logos">
            image image image image image image
        </section>
    </section>

    <section id="contact-section">
        <header>
            <span>contact-us</span>
        </header>
        <nav>
            menu
        </nav>
    </section>
@endsection