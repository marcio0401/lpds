						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<ul class="nav side-menu">
									<li><a><i class="fa fa-table"></i> Configuração<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											@can('users-visualizar')
												<li><a href="{{route('users.index')}}">Usuários</a></li>
											@endcan
											@can('roles-visualizar')
												<li><a href="{{route('roles.index')}}">Perfis</a></li>
											@endcan
											@can('permissions-visualizar')
												<li><a href="{{route('permissions.index')}}">Permissões</a></li>
											@endcan
										</ul>
									</li>
									<li><a><i class="fa fa-table"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											@can('posts-visualizar')
												<li><a href="{{route('posts.index')}}">Posts</a></li>
											@endcan
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /sidebar menu -->