@extends('layouts.backend')
@section('title')
<title>Beranda</title>
@endsection

@section('scriptjs')
    <script type="text/javascript" src="{{asset('default/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('default/assets/js/pages/form_inputs.js')}}"></script>
@endsection

@section('konten')
    <div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
                        <h4><a href="{{url('batch')}}"><i class="icon-arrow-left52 position-left"></i> </a><span class="text-semibold">Batch</span> - New Data</h4>
						</div>

					
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{route('dashboard')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
                            <li><a href="{{url('batch')}}">Batch</a></li>
							<li class="active">Form {{$id==-1 ? 'New' : 'Edit'}} Data</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
                        <h5 class="panel-title">Form {{$id==-1 ? 'New':'Edit'}} Data</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							

							<form class="form-horizontal" action="{{$id==-1 ? URL::to('batch') : URL::to('batch/'.$id) }}" method="POST">
                                @if ($id!=-1)
                                    {{ method_field('PATCH') }}
                                @endif
								<fieldset class="content-group">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<label class="control-label col-lg-2">Code</label>
										<div class="col-lg-5">
											<input type="text" name="code" class="form-control" value="{{$id!=-1 ? $det->code : ''}}">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Year</label>
										<div class="col-lg-1">
											<input type="text" name="year" class="form-control" value="{{$id!=-1 ? $det->year : ''}}">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Max Capacity</label>
										<div class="col-lg-1">
											<input type="text" name="max_capacity" class="form-control" value="{{$id!=-1 ? $det->max_capacity : ''}}">
										</div>
									</div>
                                    <div class="form-group">
			                        	<label class="control-label col-lg-2">Active</label>
			                        	<div class="col-lg-3">
				                            <select name="active" class="form-control">
												@if ($id!=-1)
													<option value="1" {{$det->active==1 ? 'selected="selected"':''}}>Active</option>
													<option value="0" {{$det->active==0 ? 'selected="selected"':''}}>In Active</option>
												@else
													<option value="1">Active</option>
													<option value="0">In Active</option>													
												@endif
				                            </select>
			                            </div>
			                        </div>
                                    <div class="text-right">
										<a href="{{url('batch')}}" class="btn btn-success"><i class="icon-arrow-left13 position-right"></i> Kembali </a>
                                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
@endsection
