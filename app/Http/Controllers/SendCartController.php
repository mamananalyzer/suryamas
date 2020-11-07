<?php

namespace App\Http\Controllers;
use Mail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SendCartController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function send(Request $request, $cartItems, $var){
        try{
            $cartItems=Cart::content();

            Mail::send('isicart',
            array(
                'name' => $request->name,
                'name2' => $request->name2,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'Address1' => $request->Address1,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'pesan' => $request->pesan,
                // dd($request->all());
            ) ,
            function($pesan) use($request){
                // $pesan->to('amptron@cbn.net.id')->subject('Request a Quote');
                $pesan->to('dbasedown211@gmail.com')->subject('Request a Quote');
                $pesan->cc('dbasedown@gmail.com', 'Maman@amptron.my.id');
                $pesan->cc('baseanalyzer@amptron.my.id', 'Maman@amptron.my.id');
                // $pesan->from(env('MAIL_USERNAME','baseanalyzer@amptron.my.id'),'Inquiry');
                $pesan->from(env('MAIL_USERNAME', 'baseanalyzer210@gmail.com'),'Amptron.my.id');
                $name = $request->input('name');
                $name2 = $request->input('name2');
                $email = $request->input('email');
                $company = $request->input('company');
                $phone = $request->input('phone');
                $Address1 = $request->input('Address1');
                $city = $request->input('city');
                $postcode = $request->input('postcode');
                $brand = $request->input('brand');
                $quantity = $request->input('quantity');
                $pesan = $request->input('pesan');
            });
            // dd($request->all());
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
        return view('/receipt2', ['receipt' => $request], compact('cartItems'))->with('terkirim',
        'Thank you for contacting us, your message has been sent.
                 Please wait for our admin to contact you.');
        // return redirect('/')->with('terkirim',
        // 'Thank you for contacting us, your message has been sent.
        //          Please wait for our admin to contact you.');
    }
}
