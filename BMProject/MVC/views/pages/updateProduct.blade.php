@extends('layout.master');
@section('Content')

@endsection
@if(@session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
<form action="{{$product->pid}}" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
</form>
<div class="mb-3">
    <label for="" class="form-label">ID Product</label>
    <input type="text" class="form-control" name="pid" id="" value="{{$product->pid}}"/>
</div>
<div class="mb-3">
    <label for="" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="pname" value="{{$product->pname}}" id=""/>
</div>
<div class="mb-3">
    <label for="" class="form-label">Company</label>
    <input type="text" class="form-control" name="company" value="{{$product->company}}" id=""/>
</div>
<div class="mb-3">
    <label for="" class="form-label">Select Year</label>
    <select class="form-select form-select-lg" name="selectYear" id="">
        <?php
        for ($year = 2015; $year <= 2025; $year++){
            echo '<option value"' . $year . '">' . $year. '</option>';
        }
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="" class="form-label">Choose image</label>
    <img src="{{$product->pimage}}" alt="Image">
    <input type="file" class="form-control" name="imageFile">
</div>

<button type="submit" name="btupdate" class="btn btn-primary">
    Update
</button>
@endsession
