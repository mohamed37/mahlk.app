
            @include('Forntend.navbar')

            <!--carousel-->


            <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="row align-items-center justify-content-center">
                  <div class="col-md-5 text-center" data-aos="fade">
                    <h1 class="text-uppercase">تواصل مع مبرمجين الموقع</h1>
                    <span class="caption d-block text-white"> <a href="#"> محمد المليح </a>مواقع اخري بواسطة </span>
                  </div>
                </div>
            </div>

            <!--end of carousel-->

            <div class="slant-1"></div>


          <!-- Contact form -->
          <div class="site-section first-section" data-aos="fade">
            <div class="container">
              <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">



                  <form action="{{route('contacts.store')}}"  method="POST" class=" bg-white">
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
                          <input type="text"  class="form-control" name="user_id" value="{{Auth::user()->id }}" hidden>
                        </div>
                    </div>



                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="phone">رقم الهاتف</label>
                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="رقم الهاتف ">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="font-weight-bold" for="message">رسالتك</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="مرحبا بك اكتب رسالتك.."></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary text-white px-4 py-2">أرسال رسالة </button>
                      </div>
                    </div>


                  </form>
                </div>

                <div class="col-lg-4">
                  <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">معلومات الاتصال</h3>
                    <p class="mb-0 font-weight-bold">العنوان</p>
                    <p class="mb-4">203 .... St. الغربية , المحلة الكبري, مصر</p>

                    <p class="mb-0 font-weight-bold">رقم الهاتف</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">البريد الالكتروني</p>
                    <p class="mb-0"><a href="https://mohamedelmeleeh@gmail.com">mohamedelmeleeh@gmail.com</a></p>

                  </div>


                </div>
              </div>
            </div>
          </div>


          <!-- End of contact form -->


            <!--Testimonials -->

            <div class="site-section bg-dark block-14 nav-direction-white">

              <div class="container">

                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="site-section-heading text-center text-white text-uppercase">قالوا عنا</h2>
                  </div>
                </div>

                <div class="nonloop-block-14 owl-carousel">


                    <div class="d-block block-testimony mx-auto text-center">
                      <div class="person w-25 mx-auto mb-4">
                        <img src="{{asset('images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
                      </div>
                      <div>
                        <h2 class="h5 mb-4 text-white ">Katie Johnson</h2>
                        <p class="text-white">&ldquo;موقع رائع في تنفيذ الطلبات ويتميز بدقة المواعيد وسرعة لااستجابة للعملة حظ جيد للتعامل مع هذا الموقع محلك.أب المتميز!&rdquo;</p>
                      </div>
                    </div>

                    <div class="d-block block-testimony mx-auto text-center">
                      <div class="person w-25 mx-auto mb-4">
                        <img src="{{asset('images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
                      </div>
                      <div>
                        <h2 class="h5 mb-4 text-white">Jun Mars</h2>
                        <p class="text-white">&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>
                      </div>
                    </div>

                    <div class="d-block block-testimony mx-auto text-center">
                      <div class="person w-25 mx-auto mb-4">
                        <img src="{{asset('images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
                      </div>
                      <div>
                        <h2 class="h5 mb-4 text-white">Shane Holmes</h2>
                        <p class="text-white">&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>

                      </div>
                    </div>

                    <div class="d-block block-testimony mx-auto text-center">
                      <div class="person w-25 mx-auto mb-4">
                        <img src="{{asset('images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
                      </div>
                      <div>
                        <h2 class="h5 mb-4 text-white">Mark Johnson</h2>
                        <p class="text-white">&ldquo;من افضل المواقع الي تعملت معاها اتمني له الاستمرارية في سرعة الاستجابة لطلبات العملة والأسعار ممتازة  والعمولة اقل من بعض المواقع !&rdquo;</p>

                      </div>
                    </div>


                    @foreach ($opinions as  $opinion)
                    <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-25 mx-auto mb-4">
                          <img src="{{asset($opinion->user->image_path)}}" alt="Image" class="img-fluid rounded-circle w-25 mx-auto">
                        </div>
                        <div>
                          <h2 class="h5 mb-4 text-white">{{$opinion->user->name}}</h2>
                          <p class="text-white">&ldquo;{{$opinion->message}}
                        </div>
                      </div>
                    @endforeach

                </div>

              </div>

            </div>

            <!--end of Testimonials -->

            @include('Forntend.footer')
