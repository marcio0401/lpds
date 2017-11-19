				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user">
										</span> {{auth()->user()->name}}<span class="caret"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li>
											<a href="" data-toggle="modal">
												<i class="fa fa-lock pull-right"></i> Redefinir senha
											</a>
										</li>
										<li>
											<a href="">
												<i class="fa fa-question-circle pull-right"></i> Ajuda
											</a>
										</li>
										

										<li>
											<a href="{{url('/logout')}}">
												<i class="fa fa-btn fa-sign-out pull-right"></i> Sair
											</a>
										</li>

									
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->