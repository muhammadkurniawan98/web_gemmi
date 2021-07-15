<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Profil GEMMI</h2>
            <p>Ruangan dan Koleksi Buku</p>
        </div>

        <div class="row portfolio-container">

            <?php for($i = 11; $i <= 18; $i++):?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <img src="{{asset('assets/img/portfolio/portfolio-'.($i-1).'.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="{{asset('assets/img/portfolio/portfolio-'.($i-1).'.jpg')}}" data-gall="portfolioGallery" class="venobox" title="{{__('gambar '.($i-10)) }}"><i class="bx bx-show"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor;?>

        </div>

    </div>
</section><!-- End Portfolio Section -->
