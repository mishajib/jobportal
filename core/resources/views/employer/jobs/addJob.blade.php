@extends('layouts.employer.app')
@section('title')
    Add job
@endsection

@section('content')

<div class="container-fluid">
<div class="card card-primary">

    <div class="card-header">
      <h3 class="card-title">Add a new job</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
<form role="form"  method="POST" action="{{route('employer.job.store')}}" 
enctype="multipart/form-data">
@csrf
      <div class="card-body">
          <div class="row">
              <div class="col-md-7 pr-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title" required value="{{old('title')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                  <textarea  name="description" class="form-control ckeditor" id="exampleInputPassword1" placeholder="Description">{{old('description')}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Roles</label>
                  <textarea  name="roles" class="form-control ckeditor" id="exampleInputPassword1" placeholder="Roles">{{old('roles')}}</textarea>
                  </div>
                 
              
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <select class="form-control" name="category" id="">
                      <option value="">--select category--</option>
                      @foreach ($categories as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" class="form-control" name="position" id="exampleInputEmail1" placeholder="Position" required value="{{old('position')}}">
                  </div>
                  <label for="exampleInputEmail1">Salary</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="salary" required value="{{old('salary')}}">
                    <div class="input-group-append">
                      <span class="input-group-text">$</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="address" required value="{{old('address')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Job type</label>
                    <select class="form-control" name="type" id="" required>
                        <option value="">--select ajob type--</option>
                        <option value="fulltime">Full time</option>
                        <option value="parttime">Part time</option>
                    </select>
                  </div>
               
                 
                 <div class="form-group">
                    <label for="exampleInputEmail1">Deadline</label>
                 <input type="date" name="deadline" class="form-control float-right" id="reservation" required value="{{old('deadline')}}">
                 </div>
        
                <div class="form-group mt-2">
                  <label for="exampleInputFile">Cover image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="cover">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                   
                  </div>
                </div>

                <div class="bootstrap-switch-container" style="width: 135px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 45px;">ON</span><span class="bootstrap-switch-label" style="width: 45px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 45px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" name="publish"></div>
              </div>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </div>
    </form>
  </div>
     </div>

  @endsection
