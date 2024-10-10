<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Hash;


use Auth;
use Session;

class FrontendController extends Controller
{
    public function home()
    {
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();

        return view("frontend.index")->with('product_lists',$products);
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }
    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }


    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }

    // public function add(Request $request)
    // {
    //     // Get the product ID from the request
    //     $productId = $request->input('product_id');
    //     $quantity = $request->input('quantity', 1);

    //     // Find the product by ID
    //     $product = Product::find($productId);

    //     if ($product) {
    //         $cart = Session::get('cart', []);
    //         if (isset($cart[$productId])) {
    //             $cart[$productId]['quantity'] += $quantity;
    //         } else {
    //             $discountedPrice = $product->price - ($product->price * $product->discount) / 100;
    //             $cart[$productId] = [
    //                 'discount' => $product->discount,
    //                 'name' => $product->title,
    //                 'discounted_price' => $discountedPrice,
    //                 'price' => $product->price,
    //                 'quantity' => $quantity,
    //                 'image' => $product->photo,
    //             ];
    //         }
    //         Session::put('cart', $cart);
    //         return response()->json([
    //             'success' => true,
    //             'cart' => $cart,
    //             'cartCount' => count($cart)
    //         ]);
    //     }
    //     return response()->json(['success' => false], 404);
    // }


    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $size = $request->input('size');
        $quantity = $request->input('quantity');
        $price = $request->input('price');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['size'] = $size;
            $cart[$productId]['quantity'] = $quantity;
            $cart[$productId]['price'] = $price;
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'size' => $size,
                'quantity' => $quantity,
                'price' => $price
            ];
        }
        session()->put('cart', $cart);

        return response()->json(['message' => 'Product added to cart!']);
    }


public function getCartCount()
{
    $cart = Session::get('cart', []);
    $cartCount = count($cart);
    return response()->json(['cartCount' => $cartCount]);
}

    public function Cart()   {
        $cart = session('cart', []);
    //   dd($cart);
        $products = Product::whereIn('id', array_keys($cart))->get();
        return view('frontend.cart', compact('products', 'cart'));

    }


    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []);

        if(isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true]);
    }

    public function update(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = (int)$request->input('quantity');
        $cart = session()->get('cart', []);


        if (isset($cart[$productId]) && isset($cart[$productId]['price'])) {

            \Log::info('Raw price value: ' . $cart[$productId]['price']);


            $price = preg_replace('/[^\d.]/', '', $cart[$productId]['price']);


            $price = (float)$price;


            \Log::info('Converted price value: ' . $price);


            $subtotal = $quantity * $price;
            $cart[$productId]['quantity'] = $quantity;
            $cart[$productId]['subtotal'] = $subtotal;

            session()->put('cart', $cart);

            $total = 0;
            foreach ($cart as $item) {
                if (isset($item['subtotal'])) {
                    $total += $item['subtotal'];
                }
            }
            // dd($total);
            session()->put('cart_total', $total);
            return response()->json([
                'success' => true,
                'subtotal' => $subtotal,
                'total' => $total
            ]);
        }

        return response()->json(['success' => false]);
    }


    public function shop_checkout()
    {
        return view('frontend.shop_checkout');
    }

    public function shop_order_complete()
    {
        return view('frontend.shop_order_complete');
    }











}
