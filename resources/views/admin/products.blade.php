@extends('layouts.admin')

@section('content')
<div class="alert alert-success alert_product_success_js" role="alert">
    <p></p>
</div>
<div class="alert alert-danger alert_product_fail_js" role="alert">

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#create_new_product">
    Add a new product
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="create_new_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a new Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" id="product_name_js">
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Product Description" required="" id="product_description_js"></textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label for="exampleFormControlFile1">Chose product image</label>
                        <input type="file" class="form-control-file" id="product_image_name_js">
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-success btn-submit">Create</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td></td>
            </tr>
        @endforeach

    </tbody>
</table>
<!-- Display the list of the products in the database -->

@endsection
