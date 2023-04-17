@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('multi')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="pat_name">
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Status</label>
                    <select class="custom-select" name="status">
                        <option selected> ---status---</option>
                        <option value="1">Interested</option>
                        <option value="0">Not Interested</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
            </form>
            <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Conference Name</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="group_name" value="{{$conference->con_name}}" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fName">Date</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="group_name" value="{{$conference->dob}}" readonly>
                  </div>
              <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="adress">Description</label>
                    <p>{{$conference->description}}</p>
                  </div>
              </div>
            </div>


@endsection