
        @extends('admin_layout.master')



@section('contect')

<form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Hesabınızı silmək istədiyinizə əminsiniz?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Hesabınız silindikdən sonra onun bütün resursları və məlumatları həmişəlik silinəcək. Hesabınızı həmişəlik silmək istədiyinizi təsdiqləmək üçün parolunuzu daxil edin.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Parol') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Legv et') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Sil') }}
                </x-danger-button>
            </div>
        </form>



                  
                    
                  </div>
                </div>
              </div>
            </div>



          
          </div>
        </div>
        <!-- /page content -->
     

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('/')}}admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/')}}admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/')}}admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('/')}}admin/images/logo.svg" alt="logo">
              </div>
             
            
              <script>
      function closeElement() {
        // Add your code here to close or hide the element.
        // You can use document.getElementById or other methods to target the element.
      }
    </script>

              <form method="POST" action="" class="pt-3">
              @csrf
              @method('delete')

              <h2 class="text-lg font-medium text-gray-900">
                {{ __('Hesabınızı silmək istədiyinizə əminsiniz?') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                {{ __('Hesabınız silindikdən sonra onun bütün resursları və məlumatları həmişəlik silinəcək. Hesabınızı həmişəlik silmək istədiyinizi təsdiqləmək üçün parolunuzu daxil edin.') }}
            </p>

                <div class="form-group">
                  <input type="password"  name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>

            <button onclick="closeElement()" class="btn btn-danger">
                Legv et
            </button>
            <button type="submit" class="btn btn-danger">
                Sil
            </button>
        </div>



              </form>


            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('/')}}admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('/')}}admin/js/off-canvas.js"></script>
  <script src="{{asset('/')}}admin/js/hoverable-collapse.js"></script>
  <script src="{{asset('/')}}admin/js/template.js"></script>
  <script src="{{asset('/')}}admin/js/settings.js"></script>
  <script src="{{asset('/')}}admin/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
