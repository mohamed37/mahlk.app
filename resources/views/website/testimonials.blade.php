
      @include('Forntend.navbar')

      <!--carousel-->


      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center" data-aos="fade">
              <h1 class="text-uppercase">قالوا عنا  </h1>
              <span class="caption d-block text-white"> <a href="#"> محمد المليح </a>مواقع اخري بواسطة </span>
            </div>
          </div>
      </div>

      <!--end of carousel-->

      <div class="slant-1"></div>


    <!-- testimonials -->


    <div class="site-section first-section">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">قالوا عنا</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">العملاء الاكثر سعادة</h2>
          </div>
        </div>
        <div class="row">


          <div class="col-md-6 col-lg-6 mb-4">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{asset('images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Katie Johnson</h2>
                <p>&ldquo;موقع رائع في تنفيذ الطلبات ويتميز بدقة المواعيد وسرعة لااستجابة للعملة حظ جيد للتعامل مع هذا الموقع محلك.أب المتميز!&rdquo;</p>
              </div>
            </div>


          </div>

          <div class="col-md-6 col-lg-6 mb-4">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{asset('images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Jun Mars</h2>
                <p>&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-4">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{asset('images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Shane Holmes</h2>
                <p>&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>

              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-6 mb-4">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{asset('images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">Mark Johnson</h2>
                <p>&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>

              </div>
            </div>
          </div>


          @foreach ($feads as $index=>$fead)
          <div class="col-md-6 col-lg-6 mb-4" id="feads">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{asset($fead->user->image_path)}}" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">{{$fead->user->name}}</h2>
                <p>&ldquo;{{$fead->content}} !&rdquo;</p>
                <p><i class="fa  fa-clock-o"></i>{{$fead->created_at}}</p>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>


      <div class="container">
        <div class="row">
        <h2 class="fead">FeadBack</h2>

         <div class="col-md-4 col-sm-12">
          <div class="feadback">

           <form  id="testimonials" action="{{route('testimonials.store')}}" class=" bg-white">
               {{ csrf_field() }}
               {{method_field('POST')}}
               <div class="row form-group">
                 <div class="col-md-12 mb-3 mb-md-0">
                   <label class="font-weight-bold" for="fullname">الأسم بالكامل</label>
                   <input type="text"  id="fullname" class="form-control" value="{{Auth::user()->fullname}}" disabled>
                 </div>
               </div>

               <div class="row form-group">
                 <div class="col-md-12">
                   <label class="font-weight-bold" for="email">البريد الألكتروني</label>
                   <input type="email" id="email" class="form-control" value="{{Auth::user()->email}}" disabled>
                 </div>
               </div>

               <div class="row form-group">
                   <div class="col-md-12">
                     <input type="text"  class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id }}" hidden>
                   </div>
               </div>



               <div class="row form-group">
                 <div class="col-md-12">
                   <label class="font-weight-bold" for="message">أكتب رأيك</label>
                   <textarea name="content" id="message" cols="30" rows="5" class="form-control @error('content') is-invalid @enderror" placeholder="مرحبا بك اكتب رسالتك.."></textarea>
                   @error('content')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                 </div>
               </div>

               <div class="row form-group">
                 <div class="col-md-12">
                   <button type="submit"  id="send" class="btn btn-primary text-white px-4 py-2">أرسال رأيك </button>
                 </div>
               </div>


           </form>

          </div>

         </div>
       </div>
    </div>



    <!-- End of testimonials -->


    @include('Forntend.footer')
