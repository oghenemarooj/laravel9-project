<x-app-layout>


    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row g-3 mb-3 row-deck">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">ADD PRODUCT</h6>
                        </div>
                        @foreach ($errors as $error)
                            
                        @endforeach
                        <div class="card-body">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">@csrf
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <img src="/storage/images/{{ $product->image }}" class="img-fluid" alt="">
                                </div>
                                <div class="mb-3">

                                    <label  class="form-label">Name</label>
                                    <input name="name" type ="text" value="{{ $product->name }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Price</label>
                                    <input name="price" value="{{ $product->price }}" type ="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Quantity</label>
                                    <input name="quantity" value="{{ $product->quantity }}" type ="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Description</label>
                                    <input name="description" value="{{ $product->description }}" type ="text" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" >Category</label>
                                    <select name="category_id"  class="form-control">
                                        <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary text-uppercase px-4">ADD PRODUCT</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div> <!-- Row end  -->

        </div>
    </div>






</x-app-layout>
