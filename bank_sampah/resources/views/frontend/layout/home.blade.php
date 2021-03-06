@extends('frontend.layout.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        <h1>Selamat Datang Di CallTrash</h1>
        <h2>Jadikan Sampahmu Menjadi Cuan!!</h2>
        <a href="#about" class="btn-get-started scrollto">Yuk Mulai!</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box pb-5 pt-0 pt-lg-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline">
                    <img src="frontend/assets/img/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                        data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content">
                    <h3>Apa Itu CallTrash Dan Mengapa Anda Perlu Menggunakannya?</h3>
                    <p class="font-italic">
                      CallTrash Adalah Bank Sampah Berbasis Digital Pertama Di Indonesia, Dengan Menggunakan CallTrash Anda Akan Mendapatkan Benefit seperti :
                    </p>
                    <ul>
                        <li><i class="bx bx-check-double"></i>Dengan Menggunakan CallTrash maka anda berpartisipasi menjaga lingkungan dari dampak kerusakan lingkungan yang disebabkan oleh penumpukan sampah.</li>
                        <li><i class="bx bx-check-double"></i>Memiliki Rekening Digital.</li>
                        <li><i class="bx bx-check-double"></i>Anda Akan Mendapatkan Uang Dari Sampah Yang Anda Jual.</li>
                        <li><i class="bx bx-check-double"></i>Uang Anda Akan Disimpan Dengan Aman Di Rekening Anda Dan Dapat Ditarik Kapanpun Yang Anda Mau.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title pt-5" data-aos="fade-up">
                <h2>Our Services</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="las la-truck"></i></div>
                        <h4 class="title"><a href="">Jemput Sampah</a></h4>
                        <p class="description">Anda Tidak Perlu Datang Ke Kantor, Cukup Tunggu Dan Kami Akan Jemput Sampah Anda</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="las la-book-open" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Rekening Digital</a></h4>
                        <p class="description">Rekening anda akan berbentuk digital sehingga anda tidak perlu ribet mengontrol rekening anda.</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="las la-book" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->
@endsection