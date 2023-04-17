@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('conference.store')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Conference Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="con_name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Date<font style="color:red">*</font></label>
                    <input type="date" class="form-control" id="fName" placeholder="" name="dob">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="adress">Description<font style="color:red">*</font></label>
                    <textarea class="form-control" id="adress" name="description" rows="2"></textarea>
                  </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
            </form>


@endsection