@include('layouts.painel.header')
@include('layouts.painel.sidebar')
@include('layouts.painel.menu_footer')
@include('layouts.painel.top_navigation')

<div class="container">
	<div class="right_col" role="main">
		<div class="page-title"></div>
		<div class="clearfix"></div>
		<div class="row">			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
			        @if(Session::has('flash_message'))
            			<div class="alert alert-success alert-dismissible fade in" role="alert">
                			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                			</button>
							<em> {!! session('flash_message') !!}</em>
            			</div>
        			@endif 

           			@include ('errors.list')

					<div class="x_title">
    					<h2>
        					{{$title}}
    					</h2>
    					<div class="clearfix"></div>
					</div>
    
					@yield('content')	
					
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.painel.footer')