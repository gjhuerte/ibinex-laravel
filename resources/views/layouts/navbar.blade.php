
<!-- Start menu here -->
<nav class="navbar navbar-expand-lg navbar-light bg-faded">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!--Logo here-->
            <img src="{{ asset("img/logo.png") }}" alt="bootstrap">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Start menu items here-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link nav" href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/why-ibinex') !!}">Why iBinex</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('pricing') !!}">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('services') !!}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/security') !!}">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/contact-us') !!}">Contact Us</a>
                </li>
            </ul>

            <button class="btn my-2 my-sm-0 semi-circle pink" type="submit">Live Demo</button>

        </div>
    </div>
</nav>
<!-- End menu here -->