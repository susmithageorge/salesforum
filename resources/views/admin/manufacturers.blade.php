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
		                                            <th>Bio</th>
		                                            <th>Created</th>
		                                            <th>Modified</th>
		                                            <th>Edit</th>
												    <th>Delete</th>
												</tr>
											</thead>

											<tbody>
												@foreach ($man_list as $man)
	                                        	<tr>
		                                            <td class="hidden-480">{{{ $man->id }}}</td>
		                                            <td>{{{ $man->name }}}</td>
		                                            <td>{{{ $man->info }}}</td>
		                                            <td>{{{ $man->created_at }}}</td>
		                                            <td>{{{ $man->updated_at }}}</td>
		                                            <td><a href="{{url('admin/'.$man->id.'/adminmanufaturerseditview')}}"><button  type="buttton" class="btn btn-success">Edit</button></td>
		                                            <td><a href="{{url('admin/'.$man->id.'/adminmanufacturersdelete')}}"><button type="button" class="btn btn-danger">Delete</button>
</td>
		                                           
		                                             
		                                            
		                                        </tr>
	                                        @endforeach

											</tbody>
										</table>
	                                 
	                                 <div>
			                        	<a href="{{ URL::to('admin/users/adduserview') }}" class="btn btn-info btn-sm pull-right">Add New Manufacturer</a>
			                    	</div> 
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