@extends('layout/base')

@section('title', 'Edit Brand')

@section('container')

    <div class="container">
        <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Add Brands</h1>
            <form enctype="multipart/form-data" action="{{url('/brand')}}/{{ $brand->id }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            @method('patch')
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="disbra">Display Brand *</label>
                        <input type="text" class="form-control @error('disbra') is-invalid @enderror" id="disbra" placeholder="Power Meter, Analog Meter" name="display_brand" value="{{ $brand->display_brand }}">
                        @error('disbra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="valbra">Value Brand *</label>
                        <input type="text" class="form-control @error('valbra') is-invalid @enderror" id="valbra" placeholder="powermeter, analogmeter" name="brand" value="{{ $brand->brand }}">
                        @error('valbra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>


            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Edit Brand" />
            </form>
        </div>
        </div>
    </div>
@endsection
