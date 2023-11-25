   <?php
   use App\Models\Baglanti;
   $baglanti=Baglanti::first();
   ?>
   <footer class="site-footer border-top">
      <div class="container">
        <div class="row">


        
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">{{__('msg.contact Info')}}</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a>Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
            <h3  class="footer-heading mb-4">{{__('msg.contact Info')}}</h3>

              <ul class="list-unstyled">
                <li class="address">{{$baglanti->baglanti_adres}}</li>
                <li class="phone"><a href="tel://{{$baglanti->baglanti_tel}}">{{$baglanti->baglanti_tel}}</a></li>
                <li class="email">{{$baglanti->baglanti_mail}}</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
            <h3  class="footer-heading mb-4">---------------</h3>
              <ul class="list-unstyled">
                <li class="address">{{$baglanti->baglanti_adres}}</li>
                <li class="phone"><a href="tel://{{$baglanti->baglanti_tel}}">{{$baglanti->baglanti_tel}}</a></li>
                <li class="address">{{$baglanti->baglanti_mail}}</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            <script>document.write(new Date().getFullYear());</script>
            <a href="https://www.facebook.com/cefer.nuriyev.1"  class="text-primary">{{__('msg.footer')}} | {{__('msg.muellif')}} </a>
      
            </p>
          </div>
          
        </div>
      </div>
    </footer>