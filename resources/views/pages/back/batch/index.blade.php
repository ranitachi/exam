@extends('layouts.backend')
@section('title')
<title>Batch</title>
@endsection

@section('konten')
    <div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Batch</span> - List</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{route('dashboard')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
							<li class="active">Batch</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="{{url('batch','-1')}}"><i class="icon-plus-circle2 position-left"></i> New Batch</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Batch</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
                            @if (Session::has('pesan'))
                                <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										{{ Session::get('pesan') }}
								</div>
                                    
							@endif
							<div id="data">
								@include('pages.back.batch.data')
							</div>
                        </div>
                    </div>
                </div>
    </div>
@endsection
@section('footscript')
<script>

		$('body').on('click', '.pagination a', function(e) {
                e.preventDefault();
				var url = $(this).attr('href');
                getPosts(url);
                window.history.pushState("", "", url);
        });
        function getPosts(page) {
            $.ajax({
                    url : page
                }).done(function (data) {
                    $('div#data').html(data);
                }).fail(function () {
                    alert('Halaman Data Batch Tidak Dapat Di Tampilkan');
            });
        }
		function hapus(id)
		{
			$('#modal_default').modal('show');
			$('#konten_default').html('Yakin Ingin Menghapus Data Ini?');
			$('#ok_model_default').on('click',function(){
				$.ajax({
                    url: APP_URL+'/batch/'+id,
                    type : 'DELETE',
                    dataType: 'json',
                    cache: false,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {"_token": "{{ csrf_token() }}"}
                }).done(function(data){
                    var txt = "Data Batch Berhasil Di Hapus";
                    $('#modal_default').modal('hide');
                    new PNotify({
						title: 'Informasi',
						text: txt,
						icon: 'icon-checkmark3',
						type: 'info'
					});
                    var url=window.location.href;
					getPosts(url);
                }).fail(function(){
                    var txt = " Data Batch Gagal Di Hapus";
                    $('#modal_default').modal('hide');
                    new PNotify({
						title: 'Informasi',
						text: txt,
						icon: 'icon-blocked',
						type: 'error'
					});
                });
			});
		}
</script>
@endsection
