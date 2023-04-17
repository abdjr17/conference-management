@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Review</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th> Name</th>
                <th>Conference</th>
                <th>rating</th>
                <th width="17%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($cons as $co)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$co->pat_name}}</td>
									<td>{{$co->con_name}}</td>
									<td>{{$co->rating}}/5</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('review', $co->id)}}" class="btn btn-primary">Show</a>
                                        </div>
                  					</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection