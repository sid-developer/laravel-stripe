@extends('stripe.layouts.master')
@section('main-content')
<div id="protien" class="protien_main">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2>Our Protien</h2>
            </div>
        </div>
    </div>
    <form action="{{route('stripe.payment')}}" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="protien">
                <figure><img src="images/pro1.png" alt="#"/></figure>
                <h3>$400</h3>
                <span> Variations  </span>
                <input type="hidden" value="" name="price" id="price">
                <button value="400" type="submit" class="read_more mar_top" onclick="SetPrice(this.value)"> Buy Now</button>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="protien">
                <figure><img src="images/pro2.png" alt="#"/></figure>
                <h3>$500</h3>
                <span>  Passages  </span>
                <button value="500" type="submit" class="read_more mar_top" onclick="SetPrice(this.value)"> Buy Now</button>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="protien">
                <figure><img src="images/pro3.png" alt="#"/></figure>
                <h3>$600</h3>
                <span> Variations </span>
                <button value="600" type="submit" class="read_more mar_top" onclick="SetPrice(this.value)"> Buy Now</button>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="protien">
                <figure><img src="images/pro4.png" alt="#"/></figure>
                <h3>$700</h3>
                <span> Pedicure </span>
                <button value="700" type="submit" class="read_more mar_top" onclick="SetPrice(this.value)"> Buy Now</button>
            </div>
        </div>
    </div>
    </form>
    </div>
</div>
@endsection

<script>

    function SetPrice(price){
        $('#price').val(price);
    }

</script>
