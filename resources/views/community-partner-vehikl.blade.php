@extends('app')

@section('body-class', 'community')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
        </a>
    </div>

    <ul class="slide-main-nav">
        @include('partials.main-nav')
    </ul>
</nav>

<section class="partner-profile">
    <div class="container">
        <a href="/community"><h4>Laravel Community</h4></a>

        <div class="partner-profile-header clearfix">
            <div class="partner-logo"><img src="/assets/svg/partner-logo-vehikl-full.svg"></div>
            <div class="partner-ctas">
                <div class="btn btn-primary">Hire Vehikl</div>
                <div class="btn btn-default">Visit Website</div>
            </div>
        </div>

        <div class="row">
            <div class="partner-profile-overview col-md-6">
                <div class="partner-profile-img"><img src="/assets/img/partner-img-tighten.png"></div>

                <div class="partner-proficiencies">
                    <h4>Proficiencies</h4>
                    <div class="flex">
                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Laravel</li>
                            <li>React</li>
                            <li>Angular</li>
                            <li>UI/UX Product Design</li>
                            <li>API Design</li>
                        </ul>

                        <ul class="partner-proficiencies-list multi-col flex-fill">
                            <li>Software Architecture</li>
                            <li>Consulting</li>
                            <li>Technical Leadership</li>
                            <li>Staff Augmentation</li>
                        </ul>
                    </div>
                </div>

                <div class="partner-social">
                    <h4>Elsewhere</h4>

                    <ul class="partner-social-list">
                        <li><img src="/assets/svg/icon-github.svg"></li>
                        <li><img src="/assets/svg/icon-twitter.svg"></li>
                        <li><img src="/assets/svg/icon-linkedin.svg"></li>
                    </ul>
                </div>
            </div>

            <div class="partner-profile-bio col-md-6">
                <h2>About Vehikl</h2>
                <p>Vehikl is a team of code-crushing Laravel experts.  Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use. </p>
                <p>Combining the power of Laravel, Lean Agile development techniques, and a diverse team with deep technical knowledge and experience allows us to provide a unique approach to make sure your work gets done as quickly, professionally, and economically as possible.  Our customers range from smaller startups looking for help with working through a feature backlog as they scale, to larger established firms that need to refactor a legacy code base and build new features. </p>
                <p>We integrate fully with your existing workflow and will dramatically increase your project’s velocity.  We also provide mentorship to more junior developers and work to assist knowledge transfer to any new developers you onboard internally.  As a development partner, Vehikl provides a flexible, scalable option while you ramp up an internal team.</p>
            </div>
        </div>
    </div>
</section>
@endsection
