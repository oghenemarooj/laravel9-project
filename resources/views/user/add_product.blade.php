<x-app-layout>


    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row g-3 mb-3 row-deck">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">ADD PRODUCT</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="post">@csrf
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
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary text-uppercase px-4">ADD CATEGORY</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div> <!-- Row end  -->

        </div>
    </div>






</x-app-layout>
