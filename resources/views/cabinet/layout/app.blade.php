<!DOCTYPE html>
<html lang="en">
@include('cabinet.layout.head')
<body>

	@include('cabinet.layout.topmenu')
	<section class="cld-main-continer">
		<div class="container">
			<div class="cld-header-main">
				<div class="row cld-get-clx-wrap">
					<div class="col-lg-7 col-sm-8 cld-progress-bar">
						<p class="text-center mt-3">MY PIS INVESTMENT SUITE &nbsp;&nbsp;>>
						</p>
						<p style="font-size: 15px;text-align: center">Earn a stable passive income with PIS bitcoin investment plans</p>

						<p style="font-size: 15px;text-align: center">We've got plans that suite your budget.</p>
					</div>
					<div class="col-lg-5 col-sm-4 cld-next-start">
						<div class="clx-countdown" id="countDownTimer">
							<a href="{{route('buy')}}" class="btn btn-clx btn-light mt-3" title="Internal Exchange"><i class="fa fa-exchange"></i>  INVESTMENT PLANS</a>
							<button  class="btn btn-clx btn-light mt-3"  data-toggle="modal" data-target="#upload"><i class="fa fa-upload"></i> UPLOAD VIDEO</button>
						</div>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div class="row cld-row-strech">

					{{-- <input type="hidden" style="display: none" class="hidden" value="2018/08/22 02:39:17" id="currentServerTime" /> --}}
					@include('cabinet.layout.menu')

					@yield('content')
					<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px;">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Upload Video</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="{{ route('video.upload')}}" 
									enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for="exampleFormControlFile1"></label>
											<input type="file" class="form-control-file" id="exampleFormControlFile1" name="video" >
											@if ($errors->has('video'))
												<span class="text-danger">{{ $errors->first('video')}}</span>
											@endif
										</div>
										<div class="form-group">
											<label for="exampleFormControlFile1">Description</label>
											<input type="text" class="form-control"  name="description" >
										
										</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" id="submit-button" class="btn btn-primary">Upload Video</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						@push('scripts')
							<script type="text/javascript">
							
							@if ($errors->has('video'))
								$('#upload').modal('show');
							@endif
							$('#upload').on('show.bs.modal', function(e){
							
								$(e.currentTarget).find('#submit-button').click(function(e){
									
									$(this).html('<i class="fa fa-spinner fa-spin"></i>');
								});
							});
						</script>

						@endpush
						@include('cabinet.layout.footer')
					</body>
					</html>