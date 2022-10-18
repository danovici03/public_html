{{-- Extends layout --}}
@extends('layout.dashboard')

{{-- Content --}}
@section('content')
<main>
<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Scrisori medicale</li>
      </ol>
		<div class="box_general">
			<h4>Mesaje</h4>
			<div class="list_general">
				<ul>
					<li>
						<figure><img src="{{asset('admin/img/avatar1.jpg')}}" alt=""></figure>
						<h4>Scrisoare medicala<i class="unread">Necitit</i></h4>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <p>Detaliu scrisoare medicala.</p>
						<p><a href="#modal-reply" data-effect="mfp-zoom-in" class="btn_1 gray"><i class="fa fa-fw fa-reply"></i> Raspunde</a><p>
					</li>
				</ul>
			</div>
            <div class="list_general">
				<ul>
					<li>
						<figure><img src="{{asset('admin/img/avatar1.jpg')}}" alt=""></figure>
						<h4>Scrisoare medicala<i class="unread">Necitit</i></h4>
                        <span class="small float-right text-muted">15:21 AM</span>
                        <p>Detaliu scrisoare medicala.</p>
						<p><a href="#modal-reply" data-effect="mfp-zoom-in" class="btn_1 gray"><i class="fa fa-fw fa-reply"></i> Raspunde</a><p>
					</li>
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
</main>
@endsection