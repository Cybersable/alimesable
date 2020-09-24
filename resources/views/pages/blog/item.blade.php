@extends('layouts.app')

@section('content')

    @include('partials.blog-breadcrumbs')

    <div class="alime--blog-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <p>In recent years people have realized the importance of proper diet and exercise, and recent surveys show that over the last 20 years people are eating better and working out more often, resulting in people living longer, but people are still lacking in their understanding that their mental well being is just as important as their physical health.</p>

                        <p>Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend, 60 hour weeks, taking work home with them and even working weekends. All of this for hopes of one day getting that big promotion. What good will it do you when your brain overloads and you have a breakdown in the office.</p>

                        <div class="my-5">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <img class="mb-10" src="img/bg-img/60.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <img class="mb-10" src="img/bg-img/61.jpg" alt="">
                                        </div>
                                        <div class="col-12">
                                            <img class="mb-10" src="img/bg-img/63.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <img class="mb-10" src="img/bg-img/62.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <p>In the end your physical health will suffer no matter how well you eat and how often you exercise. You will wind up with high blood pressure, stress and tension all of which raises the chances of you having a stroke or heart attack.</p>

                        <p>In hopes of helping you avoid this I am providing you with the things I do to keep my mental health in tip top condition.</p>

                        <p>My absolute favorite thing to do to refocus myself is to go for a long ride on my Harley. Nothing brings the world back into focus like riding free like the wind, there is no better forms of therapy as far as I am concerned.</p>

                        <!-- Blockquote -->
                        <blockquote class="alime-blockquote">
                            <h4>Thank you for shooting Jared's Bar Mitzvah. Our experience working with you was fantastic and the pictures you captured are outstanding and really captured the magic of the day.</h4>
                            <h6>- Ron &amp; Nina B</h6>
                        </blockquote>

                        <p>I also enjoy watching an hour or 2 of television every night, some light sitcoms are a great way to lighten your minds load, and laughing out loud for 30 seconds every day is a great way to release stress.</p>

                        <p>Video games are also great for stress release, if you are mad at your boss what better way to get it out of you then boxing, just imagine you are pounding on your boss and hope you don’t lose. I hope you try some of these methods or think of some of your own to help keep the stress down in your life and keep your mental health in as good of condition as the rest of you.</p>
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area mt-50 d-flex align-items-center justify-content-between">
                        <ul class="popular-tags">
                            <li><a class="btn badges-btn" href="#">CAMERA</a></li>
                            <li><a class="btn badges-btn" href="#">PHOTOGRAHY</a></li>
                            <li><a class="btn badges-btn" href="#">TIPS</a></li>
                        </ul>

                        <!-- Share Info -->
                        <div class="post-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('templates.prevnext')

    @include('templates.recommended')

    @include('templates.comments.index')

    @include('templates.comments.form')

    @include('templates.followarea')

@endsection
