@extends('layouts.app')

@section('title','Security')


@push('stylesheets')
    <link href="{{ asset("css/security.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12">
        <h1 class="title text-center">Security</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection

@section('body-class','security')
@section('bg-img','security-banner.png')

@section('content')

        <section id='first-section'>
            <article class='container-fluid'>
                <div class="row security-width">
                    <div class="col-sm-6">
                        <h4 class='subtitle'>Protection of Funds</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minima, modi nostrum voluptate voluptas</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minima, modi nostrum voluptate voluptas ipsum exercitationem esse velit accusantium ea blanditiis tenetur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minima, modi nostrum voluptate voluptas ipsum exercitationem esse velit accusantium ea blanditiis tenetur ratione enim, totam nisi beatae? Temporibus, sit, quam!</p>
                    </div>
                    <div class="col-sm-6">
                        <h4 class='subtitle'>Encryption and Technologies</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam fuga ducimus, magni, libero, quaerat consequatur impedit dolores accusamus voluptatum alias, aut amet itaque culpa deleniti? eaque? Lorem ipsum dolor sit amet, consectetur adipis</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperres accusamus volu? Dolor consequatur inventore laboriosam eaque? Lorem ipsum dolor sit amet, </p>
                    </div>
                </div>
            </article>
        </section>
        <section id='second-section'>
            <article class='container-fluid position-relative'>
                <div class="row security-width">
                    <div class="col-sm-5" id='infor-security'>
                        <h4 class='subtitle'>Information Security</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minima, modi nostrum voluptate voluptas ipsum exercitationem esse velit accu? Temporibus, sit, quam!</p>
                        <h4 class='subtitle'>Privacy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minima, modi nostrum voluptate voluptas ipsum exercitationem esse , sit, quam!</p>
                    </div>
                </div>
                <div class="security-section">&nbsp;</div>
            </article>
        </section>

@endsection