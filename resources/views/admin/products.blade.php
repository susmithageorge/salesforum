@extends('admin.dashboard')
@section('content')

<div class="main-content">
		<div class="main-content-inner">
			<!-- #section:basics/content.breadcrumbs -->
			<div class="breadcrumbs" id="breadcrumbs">
				
				
				<!-- /.breadcrumb -->
				<!-- #section:basics/content.searchbox -->
			<div class="nav-search" id="nav-search">
				
						{!! csrf_field() !!}
						
				</div>
				<!-- /section:basics/content.searchbox -->
			</div><!-- /.nav-search -->
				

			<!-- /section:basics/content.breadcrumbs -->
			<div class="page-content">
				<!-- #section:settings.box -->
				<!-- /.ace-settings-container -->
				<!-- /section:settings.box -->
				
				<div class="row">
					<div class="col-xs-12">
						<!-- Notifications -->
				
						<!-- ./ notifications -->
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
	                        <div class="col-xs-12 " >
									<table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
		                                            <th>#</th>
		                                            <th>Name</th>
		                                            <th>Email</th>
		                                            <th>Bio</th>
		                                            <th>Created</th>
		                                            <th>Modified</th>
													<th>Edit</th>
												    <th>Delete</th>
												</tr>
											</thead>

											<tbody>
												@foreach ($product_list as $product)
	                                        	<tr>
		                                            <td class="hidden-480">{{{ $user->id }}}</td>
		                                            <td>{{{ $u->name }}}</td>
		                                            <td>{{{ $user->email }}}</td>
		                                            <td>{{{ $user->bio }}}</td>
		                                            <td>{{{ $user->created_at }}}</td>
		                                            <td>{{{ $user->updated_at }}}</td>
		                                            <td><a href="{{url('admin/'.$user->id.'/adminuserseditview')}}">edit</td>
		                                            <td><a href="{{url('admin/'.$user->id.'/adminusersdelete')}}">delete</td>
		                                           
		                                            
		                                            
		                                        </tr>
	                                        @endforeach

											</tbody>
										</table>
	                                  
	                            </div><!-- /.box -->
	                        </div>
							</div>
							<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
</div><!-- /.main-content -->

@stop