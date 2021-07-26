@extends('layouts.success')

@section('title','Checkout Success')
    



@section('content')
<div class="main-empty-3-5" style="font-family: 'Poppins', sans-serif;">    
    <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
        <img class="img-empty-3-5" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-7.png" alt="">                       
        <div class="text-center w-100">
            <h1 class="title-text-empty-3-5">Checkout Successful</h1>
            <p class="d-none d-lg-block caption-text-empty-3-5">We've sent the receipt to your email<br>
                address is example@gmail.com</p>
            <p class="d-block d-lg-none caption-text-empty-3-5">We've sent the receipt to your email
                address is example@gmail.com</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('home')}}" class="btn btn-empty-3-5 d-inline-flex">
                    Home page
                </a>
                
            </div>
        </div>
    </div>

</div>
    
@endsection