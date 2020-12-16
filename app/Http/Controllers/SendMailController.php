<?php

namespace App\Http\Controllers;
use Mail;
use App\Cart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class SendMailController extends Controller
{
    public function index(){
        return view('navbar/contact');
    }
    public function send(Request $request){
        $formInput=$request->except('picture');

        $this->validate($request,[
            'name' => 'required',
            'product' => 'required',
            'description' => 'required',
            // 'price' => 'required',
            'quantity' => 'required',
        ]);

        Cart::create($formInput);

        try{
            Mail::send('isiemail',
            array(
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                // 'Address1' => $request->Address1,
                // 'city' => $request->city,
                // 'postcode' => $request->postcode,
                'product' => $request->product,
                'description' => $request->description,
                // 'price' => $request->price,
                'quantity' => $request->quantity,
                'pesan' => $request->pesan,
                'time' => $request->time,
                'date' => $request->date
            ) ,
            function($pesan) use($request){
                $pesan->to('suryamas@cbn.net.id')->subject('Request a Quote');
                $pesan->to('dbasedown211@gmail.com')->subject('Request a Quote');
                // $pesan->cc('dbasedown@gmail.com', 'Maman@amptron.my.id');
                // $pesan->cc('baseanalyzer@amptron.my.id', 'Maman@amptron.my.id');
                $pesan->from(env('MAIL_USERNAME', 'baseanalyzer210@gmail.com'),'suryamas-ep.com');
                $name = $request->input('name');
                $email = $request->input('email');
                $company = $request->input('company');
                $phone = $request->input('phone');
                // $Address1 = $request->input('Address1');
                // $city = $request->input('city');
                // $postcode = $request->input('postcode');
                $product = $request->input('product');
                $description = $request->input('description');
                // $price = $request->input('price');
                $quantity = $request->input('quantity');
                $pesan = $request->input('pesan');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }


        $pdf = PDF::loadView('receipt2', ['receipt' => $request])->setPaper('a4', 'potrait');
        return $pdf->download('receipt.pdf');
        return redirect('product');
    }

    public function reload(){
        return view('navbar/home');
    }
}
