@extends('layout/base')

@section('title', 'Contact')

@section('container')

<div class="container text-left pt-5">
    <form action=" {{ url('email/send') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
        else {
            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
            return false;
        }">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email *</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="Company">Company *</label>
                <input type="company" name="company" class="form-control" id="Company" value="" placeholder="PT. Suryamas Elsindo" required>
            </div>
            <div class="col-6 form-group">
                <label for="PhoneNumber">Phone *</label>
                <input type="tel" name="phone" class="form-control" id="PhoneNumber" value="" placeholder="+62 000" required>
            </div>
        </div>
        <div class="form-group">
            <label for="product">Product *</label>
            <input type="product" name="product" class="form-control" id="product" aria-describedby="emailHelp" placeholder="..." required>
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <input type="description" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="..." required>
        </div>
        {{-- <div class="form-group sr-only">
            <label for="userid">User ID *</label>
            <input type="userid" name="userid" class="form-control" id="userid" aria-describedby="emailHelp" value="" required>
        </div> --}}
        {{-- <div class="form-group sr-only">
            <label for="price">Price *</label>
            <input type="price" name="price" class="form-control" id="price" aria-describedby="emailHelp" value="{{ $display->price }}" required>
        </div> --}}
        <div class="form-group sr-only">
            <label for="status">Status *</label>
            <input type="status" name="status" class="form-control" id="status" aria-describedby="emailHelp" value="waiting" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity *</label>
            <input type="number" name="quantity" class="form-control" id="quantity" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Message *</label>
            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="4" required></textarea>
        </div>
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
        <br>
        <br>
        <input type="hidden" name="" value="{{date_default_timezone_set('Asia/Jakarta')}}">
        <input type="hidden" name="date" value="{{'Date : ' . date('d-m-Y')}}">
        <input type="hidden" name="time" value="{{'Time : ' . date('H:i:s')}}">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-success" type="submit" name="submit" value="Request !" />
        </div>
    </form>
</div>

@endsection


{{--  --}}
