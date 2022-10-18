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
        <li class="breadcrumb-item active">Pacienti</li>
      </ol>
		<div class="box_general">
			<h4>Colegii mei</h4>
			<div class="list_general">
				<ul>
					<li>
						<span>Colegi din 25.07.2022</span>
						<figure><img src="{{asset('admin/img/avatar1.jpg')}}" alt=""></figure>
						<h4>Dr. Petru Meșter</h4>
						<p>Informatii generale din profilul doctorului.</p>
						<p><a href="/colegi" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Cere un sfat</a> <a href="/mesaje" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Mesaje</a></p>
					</li>
					<li>
						<span>Colegi din 20.07.2022</span>
						<figure><img src="{{asset('admin/img/avatar2.jpg')}}" alt=""></figure>
						<h4>Dr. Pop Ștefan <i class="unread">Unread</i></h4>
						<p>Informatii generale din profilul pacientului.</p>
						<p><a href="/colegi" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Cere un sfat</a> <a href="/mesaje" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Mesaje</a></p>
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