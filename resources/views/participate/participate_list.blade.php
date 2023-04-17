@extends('layout.master')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">All Participate</h3>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Name</th>
                <th>Conference </th>
                <th>Status</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($pats as $pat)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$pat->pat_name}}</td>
									<td>{{$pat->con_name}}</td>
									<td>
									@if($pat->status ==1)
                                    <span class="badge light ">
                                        <i class="fa fa-circle text-success me-1"></i>
                                        Interested
                                    </span>
                                    @elseif($pat->status ==0)
                                    <span class="badge light ">
                                        Not Interested
                                    </span>
                                    @else
									</td>
									@endif
								</tr>
							@endforeach
						  </tbody>
						</table>
					</div>	 
				</div>
			</div>
		</div>


@endsection