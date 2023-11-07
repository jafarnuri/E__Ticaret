<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Baglanti;
use App\Models\Sosial;
use App\Models\Bank;
use App\Models\Haqqimizda;
use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\Mehsullar;
use App\Models\Sherhler;
use Auth;
use Illuminate\View\View;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    
    public function dashboard(){

        return view('admin.home');
    }

    public function login(Request $request){
if($request->isMethod('post')){
    $data = $request->all();

    if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
        return redirect("admin/dashboard");
    }else{
        return redirect()->back()->with("status","yalnish sifre ve ya email");
    }
}
        return view('admin.auth.login');

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    public function genelayar(){
        $ayarlar=Ayarlar::first();
        return view('admin.genel_ayar')->with('ayarlar',$ayarlar);

    }

    public function sosialayar(){
        $sosial=Sosial::first();
        return view('admin.sosial_ayar')->with('sosial',$sosial);

    }

    public function iletisimayar(){
        $baglanti=Baglanti::first();
        return view('admin.iletisim_ayar')->with('baglanti',$baglanti);

    }

    public function haqqimizda(){
        $haqqimizda=Haqqimizda::first();
        return view('admin.haqqimizda')->with('haqqimizda',$haqqimizda);

    }
    public function kategori(){
        $kategori=Kategori::get();
        return view('admin.kategoriyalar')->with('kategori',$kategori);

    }

    public function kategorielaveet(){
        
        return view('admin.kategori_elaveet');

    }

    public function kategori_yenile($id){
        $kat=Kategori::find($id);
        

    return view('admin.kategori_duzenle')->with('kat',$kat);


    }

    public function sherhler(){
        $sherhler=Sherhler::get();
        return view('admin.sherhler')->with('sherhler',$sherhler);

    }

    public function banklar(){
        $bank=Bank::get();
        return view('admin.bank')->with('bank',$bank);

    }

    public function bankelaveet(){
        
        return view('admin.bank_elaveet');

    }

    public function bankduzenle($id){
        $bank=Bank::find($id);
        return view('admin.bank_duzenle')->with('bank',$bank);

    }

    public function mehsullar(){
        $mehsullar=Mehsullar::get();
        return view('admin.mehsullar')->with('mehsullar',$mehsullar);

    }


    public function mehsulyukle(){
        $kategori=Kategori::get();
        
        return view('admin.mehsul_yukle')->with('kategori',$kategori);

    }


    public function mehsulduzenle($id){
        $mehsullar=Mehsullar::find($id);
        $kategori=Kategori::get();

        return view('admin.mehsul_duzenle')->with('mehsullar',$mehsullar)->with('kategori',$kategori);

    }

    public function istifadeciler(){
       
        
        return view('admin.istifadeciler');

    }


    public function admin_edit()
    {
        // Logic to handle the profile request
        // For example, fetching user data and displaying the user's profile view
        
        // Sample code:
        $id = Auth::guard('admin')->user()->id; // Get the currently authenticated user
        $user=Admin::find($id);
        return view('admin.update_profile_admin', compact('user'));
    }
    public function admin_resim_update (Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $user=Admin::find($id);
            if($request->hasfile('resim'))
            {
               $deleteOldImage='dimg/Adminresim/'.$user->resim;
               if(File::exists($deleteOldImage))
              {
                File::delete($deleteOldImage);
              }
              $image=$request->file('resim');
              $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
              $image->move('dimg/Adminresim',$imagename);
              $user ->resim = $imagename;
    
            }
            
            $user->update();
            
          return back()->with('user',$user);
       
   
    }

    public function update_info_admin(Request $request)
    {

        $id = Auth::guard('admin')->user()->id;
        $user=Admin::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->update();

        return back()->with('user',$user);
    }


    public function admin_update_password(Request $request)
    {
         $request->validate([
            'old_password' => 'required', 
            'new_password' => 'required | confirmed',
        ]);

        if(!Hash::check($request->old_password, auth::guard('admin')->user()->password )){
            $status=array(
                'message'=>'Hazirki parol duzgu deyil',
                'alert-type'=>'error'
            );
            return back()->with($status);

        }

        Admin::whereId(auth::guard('admin')->user()->id)->update([
            'password'=>Hash::make($request->new_password)
        ]);
 
        $status=array(
            'message'=>'Hersey qatdasinda ',
            'alert-type'=>'success'
        );
        return back()->with($status);
    



    }

    

}
