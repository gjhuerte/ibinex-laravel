@extends('layouts.app')

@section('title','Security')


@push('stylesheets')
    <link href="{{ asset("css/security.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12" data-aos="zoom-in">
        <h1 class="title text-center">Security</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection

@section('body-class','security')
@section('bg-img','security-banner-temp.png')

@section('content')

        <section id='first-section'>
            <article class='container-fluid'>
                <div class="row security-width">
                    <div class="col-sm-6">
                        <h4 class='subtitle' id="subtitle_1">Protection of Funds</h4>
                        <span id="para_1">
                            <p>
                                The protection of your crypto-funds is of paramount importance to us. For this reason, we take the ultimate lengths to ensure your funds remain safe at all times.
                            </p>
                            <p>
                                As an indication of the high protective standards we hold, Ibinex has been granted the status of fully-licensed, fully compliant and as a regulated custodian and account processor.
                            </p>
                            <p>
                                We are the first cryptocurrency exchange platform to hold this mantle and offer exclusive payment solutions. As such, we must demonstrate a consistent level of regulatory compliance
                                in order to retain professional distinction; a title of which we are immensely proud.
                            </p>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <h4 class='subtitle' id="subtitle_2">Encryption and Technologies</h4>
                        <span id="para_2">
                            <p>
                                A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no encryption technology stone unturned,
                                and has implemented the highest level of SSL security into the platform, complete with the most solid and secure technology.
                            </p>
                            <p>
                                We ensure that no weak links exist to threaten the stability and core security of Ibinex for our customers. Threats are neutralised before they present themselves &ndash;
                                we take no chances, and anticipate potential breaches before they arise, entirely removing their potential before they ever eventuate.
                            </p>
                        </span>
                    </div>
                </div>
            </article>
        </section>
        <section id='second-section'>
            <article class='container-fluid position-relative'>
                <div class="row security-width">
                    <div class="col-sm-5" id='infor-security'>
                        <h4 class='subtitle'>Information Security</h4>
                        <p>
                           Our platform is a 24/7 guarded operation, with all crypto-based funds help in cold-wallets, shielded by our team of cyber security experts who work
                           who work around the clock to ensure all funds are safe and untouchable by unauthorised seekers.
                        </p>
                        <h4 class='subtitle'>Privacy</h4>
                        <p>
                        <p>
                            Security and confidentiality are of the utmost importance for our clients, and you can learn more about our completely transparent Regulation and Privacy Policy,
                            to have complete peace of mind and confidence in Ibinex.
                        </p>
                    </div>
                </div>
                <div class="security-section">&nbsp;</div>
            </article>
        </section>

@endsection

@push('custom-scripts')

    <script>
        if (document.documentElement.clientWidth > 1023) {
            window.sr = ScrollReveal({reset: false,});

            sr.reveal('#subtitle_1', {
                origin: 'left',
                duration: 2000,
                useDelay: 'always',
                delay: 900
            });
            sr.reveal('#para_1 p', {
                origin: 'left',
                duration: 2500,
                useDelay: 'always',
                delay: 1500
            });
            sr.reveal('#subtitle_2', {
                origin: 'right',
                duration: 3500,
                useDelay: 'always',
                delay: 1700
            });
            sr.reveal('#para_2 p', {
                origin: 'right',
                duration: 4000,
                useDelay: 'always',
                delay: 2100
            });
            sr.reveal('#infor-security h4', {
                origin: 'left',
                duration: 2000,
                useDelay: 'always',
                delay: 900
            });
            sr.reveal('#infor-security p', {
                origin: 'left',
                duration: 2500,
                useDelay: 'always',
                delay: 1500
            });
        }
    </script>
@endpush