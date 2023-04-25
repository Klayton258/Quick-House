@extends('admin.layout.admin_layout')
@section('content')

@include('admin.layout.sidebar')
<!-- Sign Up Start -->


<div class="content">
    @include('admin.layout.navbar')
    <div class="container-fluid pt-4 px-4 mb-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-sm-12 col-xl-8">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">New House Form</h6>
                    <form method="POST" action="{{ route('newhouse') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">House Type</label>
                            <div class="col-10">
                                <select class="form-select col-sm-10 mb-3" aria-label="Default select example" name="type_id">
                                    <option selected>Select the house type</option>
                                        @foreach ($types as $type)
                                        <option value="{{$type->id}}">{{$type->type_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">House Category</label>
                            <div class="col-10">
                                <select class="form-select col-sm-10 mb-3" aria-label="Default select example" name="category_id">
                                    <option selected>Select the house type</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Images</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="images[]" accept="image/png, image/jpg, image/jpeg" multiple>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Suits</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="suit">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Rooms</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="rooms">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Linving Rooms</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="linving_room">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Kitchens</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kitchen">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">WCs</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="wc">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Garage</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="garage">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea cols="12" rows="5" type="text" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Visit times</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="example: 2022-01-20|2022-11-25|2022-09-12|2022-02-30" class="form-control" name="visit_times">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Pass in Outdoor</legend>
                            <div class="col-sm-4 col-xl-10">
                                <div class="form-check">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="outdoor_id" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Promotion</legend>
                            <div class="col-sm-10">
                                <div class="form-check promotionCheck">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" onchange="promotionFunction()">
                                    <label class="form-check-label" for="gridCheck1">
                                        Check if is in Promotion
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div id="promotionPrice" style="display: none;">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Promotion Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="promotion_price">
                            </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary col-6 mt-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Sign Up End -->
<script>
    function promotionFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("gridCheck1");
  // Get the output text
  var pPrice = document.getElementById("promotionPrice");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    pPrice.style.display = "flex";
  } else {
    pPrice.style.display = "none";
  }
}
</script>

@endsection
