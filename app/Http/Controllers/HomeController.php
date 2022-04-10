<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cat;
use App\Models\Partner;
use App\Models\Clint;

use App\Models\Product;

use App\Models\Image;
use App\Models\Cover;
use App\Models\Contact;
 
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function language()
{
        if (session()->has('locale')) {
            $langu=session()->get('locale');
            App::setLocale($langu);
        }else{
            session()->put('locale', 'ar'); 
            $langu='ar';        
            App::setLocale($langu);

                }
                return $langu;
}
     

    public function index()
    {
        $cats = Cat::count();

        $allcats = Cat::get();
        $partners = Partner::get();
        $clints = Clint::get();
        $contacts = Contact::get();
        
        $cover = Cover::where('id', 1)->first();
  
        $langu=$this->language();

                
      return view('home',compact('allcats','langu','partners','clints','cover','contacts'));

    }




    public function products($catid)
    {
        if($catid!="all"){

            $products = Product::where("cat_id",$catid)->get();
        }else{

         $products = Product::get();
        }
    $cats = Cat::get();
         $images = Image::get();
         $langu=$this->language();
        return view('products',compact('cats','langu','cats','products','images'));
    }
    
    public function products_vid($id)
    {

    $cats = Cat::get();
        $products = Product::where("id",$id)->get();
        $images = Image::get();
        $langu=$this->language();
        return view('showvid',compact('cats','langu','cats','products','images'));
    }
    public function products_img($id)
    {

    $cats = Cat::get();
        $products = Product::where("id",$id)->get();
        $images = Image::get();
        $langu=$this->language();
        return view('showimg',compact('cats','langu','cats','products','images'));
    }
    

   
    
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }


 





    public function search(Request $request)
    {

$search = $request->input('search');

if(empty($search))
{
    $search="s65rt456trs56tws65tr6s5tr56rg4asrdgs6a5dg16a5we1fg6wegf";
}
$posts = Product::query()

    ->where('ar_name', 'LIKE', "%{$search}%")
    ->orWhere('en_name', 'LIKE', "%{$search}%")
    ->orWhere('en_description', 'LIKE', "%{$search}%")
    ->orWhere('ar_description', 'LIKE', "%{$search}%")
    ->get();  
    $langu=$this->language();
      return view('search',compact('langu','posts'));

    }





    
}



