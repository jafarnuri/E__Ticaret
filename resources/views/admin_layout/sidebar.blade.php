<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Əsas səhifə</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Ayarlar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('/admin/genelayar')}}">Öncəliklər</a></li>
              </ul>
            </div>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('/admin/iletisimayar')}}">Bağlantı Məlumatları</a></li>
              </ul>
            </div>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('/admin/sosialayar')}}">Sosial Şəbəkə</a></li>
              </ul>
            </div>

          </li>

          <li class="nav-item" >
            <a class="nav-link" href="{{url('/admin/istifadeci')}}">
              <i class="fa fa-cogs"></i>
              <span class="menu-title">Istifadeciler</span>
            </a>
          </li>
          
          <li class="nav-item" >
            <a class="nav-link" href="{{url('/admin/haqqimizda')}}">
              <i class="fa fa-cogs"></i>
              <span class="menu-title">Haqqımızda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/kategori')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Kateqoriyalar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/banklar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Bank Məlumatları</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Şərhlər</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/mehsullar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Mehsullar</span>
            </a>
          </li>


        </ul>
      </nav>