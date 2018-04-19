<div class="sidebar sidebar-main">
				<div class="sidebar-content">
					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					@php
						$url=Request::path();
					@endphp
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="{{$url=='dashboard' ? 'active' : ''}}"><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li><a href="index.html"><i class="icon-users"></i> <span>Participant</span></a></li>
								<li class="{{$url=='batch' ? 'active' : ''}}"><a href="{{url('batch')}}"><i class="icon-files-empty"></i> <span>Batch</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Exam</span></a>
									<ul>
										<li class="{{$url=='exam' ? 'active' : ''}}"><a href="{{url('exam')}}">Exam List</a></li>
									<li class="{{$url=='exam-schedule' ? 'active' : ''}}"><a href="{{url('exam-schedule')}}">Exam Schedule</a></li>
										<li class="{{$url=='question' ? 'active' : ''}}"><a href="{{url('question')}}">Question</a></li>			
									</ul>
								</li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>