
      @include('Forntend.navbar')

      <!--carousel-->


      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center" data-aos="fade">
              <h1 class="text-uppercase"> مبيعاتنا </h1>
              <span class="caption d-block text-white"> <a href="#"> محمد المليح </a>مواقع اخري بواسطة </span>
            </div>
          </div>
      </div>

      <!--end of carousel-->

      <div class="slant-1"></div>


    <!-- gallery -->

    <div class="site-section first-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center" data-aos="fade">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">صور من منتجاتنا</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">صور منتجات الاعلانات</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <a href="{{asset('images/img_1.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{asset('images/img_2.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{asset('images/img_3.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{asset('images/img_4.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>

          <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <a href="{{asset('images/img_5.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_5.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{asset('images/img_6.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_6.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <a href="{{asset('images/img_5.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_5.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{asset('images/img_6.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_6.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{asset('images/img_3.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{asset('images/img_4.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <a href="{{asset('images/img_1.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{asset('images/img_2.jpg')}}" data-fancybox="gallery">
              <img src="{{asset('images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>

          @foreach ($posts as $index=>$post)
           <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{asset($post->image_path)}}" data-fancybox="gallery">
              <img src="{{asset($post->image_path)}}" alt="Image" class="img-fluid"></a>
           </div>
          @endforeach
        </div>
      </div>
    </div>


    <!-- End of gallery -->







      @include('Forntend.footer')
