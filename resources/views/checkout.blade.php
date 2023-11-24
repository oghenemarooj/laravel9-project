<x-guest-layout>

    @foreach ($carts as $cart)



    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    @php
                    $totalPriceAmount += $cart->price*$cart->quantity
                    @endphp
                    <h6 class="m-0 fw-bold">Make Payment {{$totalPriceAmount}} </h6>

                </div>
                <div class="card-body">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{url('order')}}" method="post" enctype="multipart/form-data">@csrf


                        <div class="mb-3">
                            <label  class="form-label">Name</label>
                            <input name="name" type ="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price</label>
                            <input name="price" type ="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Quantity</label>
                            <input name="quantity" type ="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Description</label>
                            <input name="description" type ="text" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" >Category</label>
                            <select name="category_id"  class="form-control">
                                <option>Select Category</option>

                                    <option value="#">Cash On Delivery</option>
                                    <option value="#">Paypal</option>
                                    <option value="#">Paystack</option>


                            </select>
                        </div>


                        <div class="mt-3 mb-3">
                            <button class="btn btn-primary text-uppercase px-4">Make Payment</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @endforeach

    <script>
        <script src="https://www.paypal.com/sdk/js?client-id=AenCB-bi8FaWqxsx70KlrTrax6gTfeJWXsDq7x6iSv87oUuNH1LWU484lO761gNKS-nPe70RD4r9JieB&components=buttons"></script>
    </script>
</x-guest-layout>



