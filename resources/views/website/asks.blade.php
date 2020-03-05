
      @include('Forntend.navbar')

      <!--carousel-->


      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center" data-aos="fade">
              <h1 class="text-uppercase"> الأسالة الشائعه </h1>
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
            <span class="caption d-block mb-2 font-secondary font-weight-bold">بعض الاسأله</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">اسئلة العملاء</h2>
          </div>

        </div>

        <div class="row">
        @foreach ($asks as $index=>$ask)


          <div class="col-md-11 text-right mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="asks-client">
                <h1>{{$ask->ask}}</h1>
                <span>{{$ask->answer}}</span>
            </div>
            <div class="answers">
                <h4></h4>
            </div>
          </div>
        @endforeach

    </div>

      <div class="container">
        <div class="row">
        <h2 class="asks">Asks</h2>

         <div class="col-md-4 col-sm-12">
          <div class="ask">
            <form  id="asks" action="{{route('asks.store')}}" method="POST" class=" bg-white">
                {{ csrf_field() }}
                {{method_field('POST')}}


                <div class="row form-group">
                    <div class="col-md-12">
                      <input type="text"  class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id }}" hidden>
                    </div>
                </div>



                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="message">أكتب سؤالك</label>
                    <textarea name="ask" id="message" cols="30" rows="5" class="form-control @error('ask') is-invalid @enderror" placeholder="مرحبا بك اكتب سؤالك.."></textarea>
                    @error('ask')
                    <span class="invalid-feedback" role="alert">
                     <strong></strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <button type="submit"   class="btn btn-primary text-white px-4 py-2">أرسال سؤالك </button>
                  </div>
                </div>


            </form>

          </div>

        </div>
      </div>
    </div>


    <!-- End of gallery -->







      @include('Forntend.footer')
