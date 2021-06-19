@extends('admin.master');
@section('content');

<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Product</h4>
                                </div>                                                                        
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="{{url('products/edit'.'/'.$records->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Product Name</label>
                                        <input type="text" name="name" value="{{$records->name}}" class="form-control" id="inputEmail4" placeholder="Enter Product Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Product Image</label>                                        
                                        <input type="file" name="image" value="{{$records->image}}" class="form-control" id="inputPassword4">
                                        <img src="{{ url('uploads/products'.'/'.$records->image)}}" style="height: 220px; width:400px; border-radius: 30%;">

                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputAddress">Product Price</label>
                                    <input type="text" name="price" value="{{$records->price}}" class="form-control" id="inputAddress" placeholder="Enter Product Price">
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Category</label>
                                        <select id="inputState" name="category_id" value="{{$records->category_id}}"  class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category) 
                                            <option {{($category->id == $records->category_id) ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>                                            {{$category->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state-dropdown">
                                        </select>
                                        </div>                        
                                        <div class="form-group">
                                        <label for="city">City</label>
                                        <select class="form-control" id="city-dropdown">
                                        </select>
                                        </div> --}}
                                    {{--  <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">City</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>  --}}
                                </div>
                                {{--  <div class="form-group">
                                    <div class="form-check pl-0">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="gridCheck">
                                            <label class="custom-control-label" for="gridCheck">Check me out</label>
                                        </div>
                                    </div>
                                </div>  --}}
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Update</button>
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
