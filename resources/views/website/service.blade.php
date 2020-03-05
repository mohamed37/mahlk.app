
      @include('Forntend.navbar')

      <!--carousel-->


      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center" data-aos="fade">
              <h1 class="text-uppercase">خدماتنا </h1>
              <span class="caption d-block text-white"> <a href="#"> محمد المليح </a>مواقع اخري بواسطة </span>
            </div>
          </div>
      </div>

      <!--end of carousel-->

      <div class="slant-1"></div>


    <!-- Services -->
    <div class="slant-1"></div>

    <div class="site-section first-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center" data-aos="fade">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">خدماتنا</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">الخدمات</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">بيع </h3>
              <p>مبيعاتنا ستكون اكثر أمانا بوجودك  معانا وستنال خدمة ممتازة</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">شراء</h3>
              <p> ابحث عن ما تريد شراء وستجده </p>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3"> تو ظيف </h3>
              <p>يوجد لدينا وظائف كثيرة ابحث و ستجد ما يناسبك</p>

            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="text-center">
              <span class="flaticon-box display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">أجهزة كهربية وتليفونات</h3>
              <p>كل من الموبيلات والتابلت واللاب توبات يوجد لدينا والكمبيوترات ايضا توجد وكل ما يلزم الموبيلات والكمبيوترات</p>
            </div>
          </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">بيع </h3>
              <p>مبيعاتنا ستكون اكثر أمانا بوجودك  معانا وستنال خدمة ممتازة</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">شراء</h3>
              <p> ابحث عن ما تريد شراء وستجده </p>

            </div>
          </div>

          @foreach ($categories as $index=>$category)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="{{$category->fonts}} d-block mb-3 text-primary" style="font-size:50px"></span>
              <h3 class="text-uppercase h4 mb-3"><a href="{{route('posts', ['id'=>$category->id])}}">{{$category->name}}</a></h3>
              <p> ابحث عن ما تريده وستجده </p>

            </div>
          </div>

          @endforeach
        </div>
      </div>
    </div>


    <!-- End of Services -->





      @include('Forntend.footer')
