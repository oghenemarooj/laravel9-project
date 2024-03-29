<x-guest-layout>

    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-bg-two">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- coupon-area -->
        <div class="coupon-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="coupon-bg">
                            <div class="coupon-title">
                                <span>Use coupon Code</span>
                                <h3 class="title">Get $3 Discount Code</h3>
                            </div>
                            <div class="coupon-code-wrap">
                                <h5 class="code">ganic21abs</h5>
                                <img src="/eco_assets/img/images/coupon_code.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coupon-area-end -->

        <!-- best-sellers-area -->
        <section class="best-sellers-area pt-85 pb-70">
            <div class="container">
                <div class="row align-items-end mb-40">
                    <div class="col-md-8 col-sm-9">
                        <div class="section-title">
                            <span class="sub-title">Related Products</span>
                            <h2 class="title">From this Collection</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3">
                        <div class="section-btn text-left text-md-right">
                            <a href="shop.html" class="btn">View All</a>
                        </div>
                    </div>
                </div>
                <form action="{{url('order')}}" method=" POST">@csrf
                <div class="best-sellers-products">
                    <div class="row justify-content-center">

                        @foreach ($carts as $cart)


                        <div class="col-3">
                            <div class="sp-product-item mb-20">
                                <div class="sp-product-thumb">
                                    <span class="batch">New</span>
                                    <input type="text" name="image[]" value=" {{$cart->image}}" hidden="">
                                    <a href="#"><img src="/storage/images/{{ $cart->image }}" alt=""></a>
                                </div>
                                <div class="sp-product-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6 class="title"><a href="#">
                                        <input type="text" name="productname[]" value=" {{$cart->product_title}}" hidden="">
                                        {{$cart->product_title}}</a></h6>
                                    <span class="product-status">
                                        <input type="text" name="quantity[]" value=" {{$cart->quantity}}" hidden="">
                                        {{$cart->quantity}}</span>

                                    <p>
                                        <input type="text" name="price[]" value=" {{$cart->price}}" hidden="">
                                        {{$cart->price}}</p>
                                    <div class="sp-cart-wrap">
                                        {{-- <form action="#">
                                            <div class="">
                                                <input type="text" value="1">
                                            </div>
                                        </form> --}}
                                        <a class="btn btn-danger" href="{{url('delete',$cart->id)}}">Delete</a>
                                    </div>

                                    <a class="btn btn-danger" href="{{url('checkout')}}">checkout</a>
                                </div>
                            </div>

                        </div>

                        @endforeach


                    </div>

                </div>
                <button class="btn btn-success">Confirm Order</button>
                </form>
            </div>
        </section>
        <!-- best-sellers-area-end -->

    </main>
</x-guest-layout>
