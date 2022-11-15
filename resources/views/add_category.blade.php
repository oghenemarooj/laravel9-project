<x-app-layout>
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row g-3 mb-3 row-deck">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Find Location</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Country</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Country</option>
                                    <option value="1">India</option>
                                    <option value="2">Usa</option>
                                    <option value="3">Italy</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">City</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select City</option>
                                    <option value="1"> Albany </option>
                                    <option value="2"> Allen </option>
                                    <option value="3"> Burbank </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Zipcode</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Geocoded</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary text-uppercase px-4">Search Loaction</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Add Store</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label  class="form-label">Name</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Geocoded</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type ="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type ="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">https://eBazar.com/location/</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary text-uppercase px-5">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
           
        </div>
    </div>





</x-app-layout>
