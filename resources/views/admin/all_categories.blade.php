@extends('admin_layout')
@section('admin_content')
    <h4 class="alert-heading">Warning!</h4>
    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
    </noscript>

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li><a href="{{URL::to('/all_categories')}}">All Categories</a></li>
            </ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>category_id</th>
								  <th>category_name</th>
								  <th>category_description</th>
								  <th>publication_status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						@foreach($all_categories as $v_category)   
						  <tbody>
							<tr>
								<td>{{$v_category->category_id}}</td>
								<td class="center">{{$v_category->category_name}}</td>
								<td class="center">{{$v_category->category_description}}</td>
								<td class="center">
								    @if($v_category->publication_status==1)
									<span class="label label-success">Active</span>
								    @else
									<span class="label label-danger">Inactive</span>
								    @endif
								</td>
								<td class="center">
								   @if($v_category->publication_status==1)
									<a class="btn btn-danger" href="{{URL::to('/in_active/'.$v_category->category_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="{{URL::to('/active/'.$v_category->category_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection
