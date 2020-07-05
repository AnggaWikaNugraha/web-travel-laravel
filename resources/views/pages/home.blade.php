@extends('layouts.app')

@section('title' , 'home')

@section('content')

    <!-- header -->
    <header class="text-center">
        <div data-aos="zoom-in">
            <h1>Jelajahi kemudahan dunia</h1>
            <h1>as easy one click</h1>
        </div>
        <button class="btn btn-primary btn-get-started">GET STARTED</button>
    </header>
    <!-- akhir header -->

    <main>
        <!-- statistika -->
        <div class="container">
            <section class="section-stats row" id="stats">
                <div class="col-3 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- akhir statistika -->

        <!-- populer -->
        <section class="section-populer" id="populer">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-populer-heading">
                        <h2 data-aos="zoom-in">Wisata populer</h2>
                        <p data-aos="zoom-in">sesuatu yang belum kamu liat sebelumnya</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-populer-content container" id="populerContent">
            <div class="section-populer-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/picture1.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">Deratan ,bali</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/picture2.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">Deratan ,bali</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/picture3.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">Deratan ,bali</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/picture4.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">Deratan ,bali</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir populer -->

        <!-- partner -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Partner kami</h2>
                        <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">beberapa perusahaan yang <br/> menjalin kerja sama dengan kami</p>
                    </div>
                    <div class="col-md-8 text-center" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        <img class="logo-partners" src="frontend/images/logos_partner.png">
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir partner -->

        <!-- testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 data-aos="fade-down">They are loving us</h2>
                        <p data-aos="fade-down">Moment yang kita berikan <br/>untuk pengalaman yang terbaik</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-populer-travel row justify-content-center">
                    <div class="col-sm-6 col-md6 - col-lg-4" data-aos="zoom-in-down">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic1.png" class="mb-4 mt-4 rounded-circle">
                                <h3 class="mb-4">Angga wika</h3>
                                <p class="testimonial">sangat bagus dan kagum pada ciptaan allah swt</p>
                                <hr/>
                                <p class="trip-to mt-2">trip to ubud</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md6 - col-lg-4" data-aos="zoom-in-down">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic2.png" class="mb-4 mt-4 rounded-circle">
                                <h3 class="mb-4">naomi</h3>
                                <p class="testimonial">keren bossqq , pengen netep disana yang lama</p>
                                <hr/>
                                <p class="trip-to mt-2">trip ke malang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md6 - col-lg-4" data-aos="zoom-in-down">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic3.png" class="mb-4 mt-4 rounded-circle">
                                <h3 class="mb-4">cika</h3>
                                <p class="testimonial">haiiyuu deui</p>
                                <hr/>
                                <p class="trip-to mt-2">trip ke yogyakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mx-1">
                                  I Need Help
                            </a>
                        <a href="#" class="btn btn-get-started">
                              GET STARTED
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- akhir testimonial -->
    </main>

@endsection

