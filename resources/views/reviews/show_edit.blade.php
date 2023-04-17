@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="" enctype="multipart/form-data">

@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="" value="{{$review->pat_name}}" readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">Conference</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="" value="{{$review->con_name}}" readonly>
                  </div><div class="form-group col-md-4">
                    <label for="fName">Rating</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="" value="{{$review->rating}}/5" readonly>
                  </div>

              </div> 
              <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="adress">Comment</label>
                    <p>{{$review->description}}</p>
                  </div>
              </div>
            </form>


@endsection