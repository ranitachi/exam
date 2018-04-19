@extends('layouts.backend')
@section('title')
<title>Form Exam</title>
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
                        <h4><a href="{{url('exam')}}"><i class="icon-arrow-left52 position-left"></i> </a><span class="text-semibold">Exam</span> - New Data</h4>
						</div>

					
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{route('dashboard')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
                            <li><a href="{{url('exam')}}">Exam</a></li>
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
							

							<form class="form-horizontal" action="{{$id==-1 ? URL::to('exam') : URL::to('exam/'.$id) }}" method="POST">
                                @if ($id!=-1)
                                    {{ method_field('PATCH') }}
                                @endif
								<fieldset class="content-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Code</label>
                                            <div class="col-lg-6">
                                                <input type="text" name="code" class="form-control" value="{{$id!=-1 ? $det->code : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Exam Name</label>
                                            <div class="col-lg-6">
                                                <input type="text" name="name" class="form-control" value="{{$id!=-1 ? $det->name : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Time <small><i>(*in seconds)</i></small></label>
                                            <div class="col-lg-3">
                                                <input type="text" name="time" class="form-control" value="{{$id!=-1 ? $det->time : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Number Of Question</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="num_of_question" id="num_of_question" class="form-control" value="{{$id!=-1 ? $det->num_of_question : ''}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Level 1</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="question_1" class="form-control" value="{{$id!=-1 ? $det->question_1 : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Level 2</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="question_2" class="form-control" value="{{$id!=-1 ? $det->question_2 : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Level 3</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="question_3" class="form-control" value="{{$id!=-1 ? $det->question_3 : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Level 4</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="question_4" class="form-control" value="{{$id!=-1 ? $det->question_4 : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Total Score</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="total_score" class="form-control" value="{{$id!=-1 ? $det->total_score : ''}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">Passing Score</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="passing_score" class="form-control" value="{{$id!=-1 ? $det->passing_score : ''}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
									
									
                                    
                                    <div class="text-right">
										<a href="{{url('exam')}}" class="btn btn-success"><i class="icon-arrow-left13 position-right"></i> Kembali </a>
                                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
@endsection
<script>

</script>