<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Msgmail;
use App\Models\Product;
use App\Models\Image;
use App\Models\User;
use App\Models\Partner;
use App\Models\Clint;
use App\Models\Contact;
use App\Models\Cover;
use Illuminate\Support\Facades\Storage;
use Auth;
use App;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }
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
        $products = Product::count();
        $cover = Cover::where('id', 1)->first();


        $last_cats = Cat::skip(0)->take(5)->get();
        $last_products = Product::skip(0)->take(5)->get();

        $langu=$this->language();
        return view('dashboard.index',compact('cats','langu','products','last_cats','last_products','cover'));
    }

    
    public function cats()
    {
        $cats = Cat::get(); 
$langu=$this->language();
        return view('dashboard.cats.index',compact('cats','langu'));
    }
    public function quickmsg()
    {
        $quickmsg = Msgmail::get(); 
$langu=$this->language();
        return view('dashboard.quickmsg.index',compact('quickmsg','langu'));
    }


    public function delete_msg(Request $request)
    {

        $cat = Msgmail::where('id',$request->msg_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }

    public function save_cat(Request $request)
    {
       $cat = new Cat();

       $cat->ar_name = $request->ar_name;
       $cat->en_name = $request->en_name;
       $cat->fr_name = $request->fr_name;
       $cat->ar_description = nl2br($request->ar_description);
       $cat->en_description = nl2br($request->en_description);
       $cat->fr_description = nl2br($request->fr_description);
       $cat->photo = $request->photo ? $request->photo->store('public/photos') : null;

       $cat->save();

       if ($cat)
       {
           return redirect()->back();
       }
    }


    public function update_cat(Request $request)
    {
       $cat =  Cat::findOrFail($request->cat_id);

       $cat->ar_name = $request->ar_name;
       $cat->en_name = $request->en_name;
       $cat->ar_description = nl2br($request->ar_description);
       $cat->en_description = nl2br($request->en_description);
       $cat->photo = $request->photo ? $request->photo->store('public/photos') : $cat->photo;

       $cat->save(); 

       if ($cat)
       {
           return redirect()->back();
       }
    }


    
    public function delete_cat(Request $request)
    {

        $cat = Cat::where('id',$request->cat_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }



     public function products()
     {
         $cats = Cat::get();
         $products = Product::get();
         $images = Image::get();
 
         return view('dashboard.products.index',compact('products','cats','images'));
     }



     
    public function save_product(Request $request)
    {
       $product = new Product();

       $product->ar_name = $request->ar_name;
       $product->en_name = $request->en_name;
       $product->price = $request->price;
       $product->quantity = $request->quantity;
       $product->cat_id = $request->cat_id;
       $product->ar_description = nl2br($request->ar_description);
       $product->en_description = nl2br($request->en_description);

       $product->photo = $request->photo ? $request->photo->store('public/photos') : null;
       $product->video = $request->video;

       $product->save();

        if (isset($request->images ))
        {
            foreach ($request->images as $img)
            {
             $images = new Image();
             $images->image = $img ? $img->store('public/photos') : null;
             $images->product_id = $product->id;
              $images->save();
            }     
        }


       if ($product)
       {
           return redirect()->back();
       }
    }

    
    public function update_product(Request $request)
    {
       $product =  Product::findOrFail($request->product_id);

       $product->ar_name = $request->ar_name;
       $product->en_name = $request->en_name;
       $product->price = $request->price;
       $product->quantity = $request->quantity;
       $product->cat_id = $request->cat_id;
       $product->ar_description = nl2br($request->ar_description);
       $product->en_description = nl2br($request->en_description);
       $product->photo = $request->photo ? $request->photo->store('public/photos') : $product->photo;
       $product->video = $request->video;

       $product->save();

       if (isset($request->images ))
       {
           foreach ($request->images as $img)
           {
            $images = new Image();
            $images->image = $img ? $img->store('public/photos') : null;
            $images->product_id = $request->product_id;
            $images->save();
           }     
       }


       if ($product)
       {
           return redirect()->back();
       }
    }


    public function delete_product(Request $request)
    {

        $product = Product::where('id',$request->product_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }



     
    public function delete_image(Request $request)
    {

        $image = Image::where('id',$request->image_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }




     public function profile()
     {
         $user = Auth::user();
$langu=$this->language();
         return view('dashboard.profile',compact('user','langu'));
     }

 







     public function update_profile(Request $request)
     {
        $user =  User::findOrFail(Auth::user()->id);
 
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->newPassword !=null)
        {
            $user->password =  Hash::make($request->newPassword);
        }
  
        $user->save();
 
        if ($user)
        {
            return redirect()->back();
        }
     }

///////////////////////////////
public function partners()
     {
          $partners = Partner::get();
  $langu=$this->language();
         return view('dashboard.partner.index',compact('partners','langu'));
     }



     
    public function save_partner(Request $request)
    {
       $partner = new Partner();

       $partner->name = $request->name;
       $partner->phone = $request->phone;
       $partner->link = $request->link;
       $partner->photo = $request->photo ? $request->photo->store('public/photos') : null;
       $partner->save();

       if ($partner)
       {
           return redirect()->back();
       }
    }



    public function delete_partner(Request $request)
    {

        $partner = Partner::where('id',$request->partner_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }


     public function clints()  
     {
          $clints = Clint::get();
  
         return view('dashboard.clint.index',compact('clints'));
     }



     
    public function save_clint(Request $request)
    {
       $clint = new Clint();

       $clint->name = $request->name;
       $clint->phone = $request->phone;
       $clint->link = $request->link;
       $clint->photo = $request->photo ? $request->photo->store('public/photos') : null; 
       $clint->save();

       if ($clint)
       {
           return redirect()->back();
       }
    }



    public function delete_clint(Request $request)
    {

        $clint = Clint::where('id',$request->clint_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }



     public function contacts()  
     {
          $contacts = Contact::get();
  $langu=$this->language();
         return view('dashboard.contacts.index',compact('contacts','langu'));
     }



     
    public function save_contact(Request $request)
    {
       $contact = new Contact();

       $contact->name = $request->name;
       $contact->phone = $request->phone;
       $contact->link = $request->link;
       $contact->photo = $request->photo ? $request->photo->store('public/photos') : null; 
       $contact->save();

       if ($contact)
       {
           return redirect()->back();
       }
    }



    public function delete_contact(Request $request)
    {

        $contact = Contact::where('id',$request->contact_id)->delete();
        //$cat->save();
      
           return redirect()->back();
     }




     public function update_cover(Request $request)
     {
        $cover =  Cover::findOrFail(1);
 
        $cover->cover =$request->cover ? $request->cover->store('public/photos') : $cover->cover; 
 
        $cover->save();
 
        if ($cover)
        {
            return redirect()->back();
        }
     }

     public function update_video(Request $request)
     {
        $cover =  Cover::findOrFail(1);
 
        $cover->video =$request->video ? $request->video->store('public/photos') : $cover->video; 
 
        $cover->save();
 
        if ($cover)
        {
            return redirect()->back();
        }
     }











}
