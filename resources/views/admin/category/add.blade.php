@extends('admin.includes.admin_design')
@section('content')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>
        <div class="col-auto float-right ml-auto">
            <a href="{{ route('category.index') }}" class="btn update-btn btn-primary" ><i class="bi bi-eye"></i> View add </a>

        </div>
        <div class="card-body card-block">
            @include('admin.includes._message')
            <form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="parent_id" class=" form-control-label">Category <span class="text-danger">*</label></div>
                    <div class="col-12 col-md-9">
                        <select name="parent_id" id="parent_id" class="form-control-sm form-control">
                            <option value="0">Main Category</option>
                            @foreach($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach

                        
                            
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="name" class=" form-control-label">Category Name<span class="text-danger">*</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="name" name="category_name" placeholder="Enter category name" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="status" class=" form-control-label">Select Status</label></div>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="checkbox"name="status" data-toggle="switchbutton" checked data-size="xs"  data-onstyle="warning" data-width="60" data-height="5">
                         <label>Active</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    
                </div>
               
            </form>
        </div>
        
    </div>
   
</div>
@endsection
@section('js')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
@endsection