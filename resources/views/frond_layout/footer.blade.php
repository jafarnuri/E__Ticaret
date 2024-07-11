<?php
   use App\Models\Baglanti;
   use App\Models\Sosial;
   $baglanti=Baglanti::first();
   $sosial=Sosial::first();
   ?>
<footer class="site-footer border-top">
  <div class="container">
    <div class="row">



      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">{{__('msg.contact Info')}}</h3>

          <ul class="list-unstyled">
            <li class="cafer">{{$baglanti->baglanti_adres}}</li>
            <li class="phone"><a href="tel://{{$baglanti->baglanti_tel}}">{{$baglanti->baglanti_tel}}</a></li>
            <li class="email">{{$baglanti->baglanti_mail}}</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">

          <ul class="list-unstyled">
            <li class=""><img src="{{asset('icons/294712_circle_youtube_icon.png')}}" alt="Image placeholder" width="25"
                height="25"><a href="{{$sosial->sosial_youtube}}">Youtube</a></li>
            <li class=""><img src="{{asset('icons/3225190_app_linkedin_logo_media_popular_icon.png')}}"
                alt="Image placeholder" width="25" height="25"><a href="{{$sosial->sosial_linkedin}}">Linkedin</a> </li>
            <li class=""><img src="{{asset('icons/3225191_app_instagram_logo_media_popular_icon.png')}}"
                alt="Image placeholder" width="25" height="25"><a href="{{$sosial->sosial_instagram}}">Instagaram </a>
            </li>
            <li class=""><img src="{{asset('icons/5296499_fb_facebook_facebook logo_icon.png')}}"
                alt="Image placeholder" width="25" height="25"><a href="{{$sosial->sosial_facebook}}">Facebook </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

          <script>document.write(new Date().getFullYear());</script>
          <a href="https://www.facebook.com/cefer.nuriyev.1" class="text-primary">{{__('msg.footer')}} |
            {{__('msg.muellif')}} </a>

        </p>
      </div>

    </div>
  </div>
</footer>