<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin')}}">
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
                <li class="nav-item"><a class="nav-link" href="{{route('genelayar')}}">Öncəliklər</a></li>
              </ul>
            </div>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('iletisimayar')}}">Bağlantı Məlumatları</a></li>
              </ul>
            </div>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('sosialayar')}}">Sosial Şəbəkə</a></li>
              </ul>
            </div>

          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">İstifadəçi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('istifadeci')}}"> Istifadeciler </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('register')}}"> Qeydiyyat </a></li>
              </ul>
            </div>
          </li> 
          
          <li class="nav-item" >
            <a class="nav-link" href="{{route('haqqimizda')}}">
              <i class="fa fa-cogs"></i>
              <span class="menu-title">Haqqımızda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('kategori')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Kateqoriyalar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('banklar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Bank Məlumatları</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('sherhler')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Şərhlər</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('mehsullar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Mehsullar</span>
            </a>
          </li>


        </ul>
      </nav>