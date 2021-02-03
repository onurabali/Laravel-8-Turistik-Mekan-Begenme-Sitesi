<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id', 'title', 'image', 'city','description')->limit(4)->get();
        $daily = Product::select('id', 'title', 'image', 'city','description')->limit(4)->inRandomOrder()->get();
        $last = Product::select('id', 'title', 'image', 'city','description')->limit(4)->orderByDesc('id')->get();
        $picked = Product::select('id', 'title', 'image', 'city','description')->limit(4)->inRandomOrder()->get();
       # print_r($picked);
       # exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'last' => $last,
            'picked' => $picked,
            'page' => 'home'
        ];
        return view('home.index', $data);
    }

    public function product($id, $city)
    {
        $data = Product::find($id);
        $datalist=Image::where('product_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.product_detail', ['data'=>$data,'datalist'=>$datalist]);
    }

    public function getproduct(Request $request)
    {
        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1) {
            $data = Product::where('title', $request->input('search'))->first();
            return redirect()->route('product', ['id' => $data->id, 'city' => $data->city]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }
    }

    public function productlist($search)
    {
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);
    }




    public function categoryproducts($id, $keywords)
    {
        $datalist = Product::where('category_id', $id)->get();
        $data = Category::find($id);
        #  print_r($data);
        #  exit();
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist]);
    }


    public function about()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting, 'page' => 'home']);
    }

    public function fag()
    {
        return view('home.fag');
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting, 'page' => 'home']);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting, 'page' => 'home']);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->input('ip');
        $data->save();
        return redirect()->route('contact')->with('success', 'Your message send successfully');
    }


    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login');
    }
}
