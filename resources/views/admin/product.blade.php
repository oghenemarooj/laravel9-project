<x-app-layout>
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Products</h3>
                        <div class="btn-group group-link btn-set-task w-sm-100">
                            <a href="product-grid.html" class="btn active d-inline-flex align-items-center" aria-current="page"><i class="icofont-wall px-2 fs-5"></i>Grid View</a>
                            <a href="product-list.html" class="btn d-inline-flex align-items-center"><i class="icofont-listing-box px-2 fs-5"></i> List View</a>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">

                <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-3">
                        @foreach ($products as $product)
                        <div class="col">
                            <div class="card">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="product-item active">
                                            <img src="/storage/images/{{ $product->image }}" alt="product" class="img-fluid w-100">
                                        </div>
                                        <a class="add-wishlist" href="#">
                                            <i class="bi bi-heart-fill text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="product-content p-3">
                                        <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5 (145)</span>
                                        <a  class="fw-bold">{{ $product->name }} </a>
                                        <p  class="text-muted">{{ $product->description }}</p>
                                        <span  class="d-block fw-bold fs-5 text-secondary">{{ $product->price }}</span>
                                        <a href="{{ route('product.edit', $product) }}" onclick="return confirm('are you sure')" class="btn btn-primary mt-3">Edit Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div> <!-- Row end  -->
        </div>
    </div>

</x-app-layout>
