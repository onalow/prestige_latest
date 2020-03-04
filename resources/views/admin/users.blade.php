
@extends('layouts.admin.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">  
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel" style="min-height: 530px">
					<div class="x_title">
						<h2><i class="fa fa-users"></i> List Of Users</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>S/No</th>
									<th>User</th>
									<th>Email</th>
									<th>Wallet</th>
									<th>Phone</th>
									<th>Status</th>
									<th>Investment Status</th>
									<th>Plan</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@isset($users)
									@foreach($users as $user)
										<tr>
										<td>{{ $loop->index +1}}</td>
										<td>{{$user->username}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->wallet}}</td>
										<td>{{$user->phone}}</td>
										<td>{{$user->verified ==1 ? 'Verified' : 'Not Verified'}}</td>
										<td>{{$user->plan() ? 'Active' : 'Not Active'}}</td>
										<td>{{$user->plan() ? $user->plan()->category->name : ''}}</td>
										<td>{{$user->created_at}}</td>
										<td><a href="{{route('user.delete', $user->id)}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to do this?')">Delete User</a></td>	
										</tr>
									@endforeach
								@endisset
			
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->

@endsection









