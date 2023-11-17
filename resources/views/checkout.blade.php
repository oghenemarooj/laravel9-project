@extends('layouts.special')
@section('content')

<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row g-3 mb-3 row-deck">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">ADD PRODUCT</h6>
                    </div>
                    <div class="card-body">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form action="#" method="post" enctype="multipart/form-data">@csrf
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
                                   
                                        <option value="#">#</option>


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
<div class="row g-3 mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                <h6 class="m-0 fw-bold">Recent Transactions</h6>
            </div>
            <div class="card-body">
                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Item</th>
                            <th>Customer Name</th>
                            <th>Payment Info</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>#Order-78414</strong></td>
                            <td><img src="/deco_assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span> Oculus VR </span></td>
                            <td>Molly</td>
                            <td>Credit Card</td>
                            <td>
                                $420
                            </td>
                            <td><span class="badge bg-warning">Progress</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-58414</strong></td>
                            <td><img src="/deco_assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                            <td>Brian</td>
                            <td>Debit Card</td>
                            <td>
                                $220
                            </td>
                            <td><span class="badge bg-success">Complited</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-48414</strong></td>
                            <td><img src="/deco_assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                            <td>Julia</td>
                            <td>Debit Card</td>
                            <td>
                                $250
                            </td>
                            <td><span class="badge bg-success">Complited</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-38414</strong></td>
                            <td><img src="/deco_assets/images/product/product-4.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Flower Port</span></td>
                            <td>Sonia</td>
                            <td>Credit Card</td>
                            <td>
                                $320
                            </td>
                            <td><span class="badge bg-warning">Progress</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-28414</strong></td>
                            <td><img src="/deco_assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Oculus VR</span></td>
                            <td>Adam H</td>
                            <td>Debit Card</td>
                            <td>
                                $20
                            </td>
                            <td><span class="badge bg-warning">Progress</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-18414</strong></td>
                            <td><img src="/deco_assets/images/product/product-2.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Wall Clock</span></td>
                            <td>Alexander</td>
                            <td>Debit Card</td>
                            <td>
                                $820
                            </td>
                            <td><span class="badge bg-success">Complited</span></td>
                        </tr>
                        <tr>
                            <td><strong>#Order-11414</strong></td>
                            <td><img src="/deco_assets/images/product/product-3.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>Note Diaries</span></td>
                            <td>Gabrielle</td>
                            <td>Bank Emi</td>
                            <td>
                                $620
                            </td>
                            <td><span class="badge bg-success">Complited</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- Row end  -->


@endsection

