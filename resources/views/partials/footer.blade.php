<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    @foreach ($organizations as $organization)
                                        <a href="#"><img src="{{ asset('storage/' . $organization->image) }}"
                                                alt="" style="width: 200px; height: 200px;"></a>
                                    @endforeach
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        @foreach ($organizations as $organization)
                                            <p class="info1">Alamat: {{ $organization->address }}</p>
                                            <p class="info2">Email: {{ $organization->email }}</p>
                                            <p class="info2">Telepon: {{ $organization->notelp }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Popular post</h4>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post1.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post2.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/footer_post3.png" alt="">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                <img src="assets/img/gallery/body_card4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | By <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="#" target="_blank">FRPB_PMK</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
