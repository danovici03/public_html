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
        <li class="breadcrumb-item active">Jurnal</li>
      </ol>
		<div class="box_general">
			<h4>Jurnal de tensiune</h4>
			<div class="list_general">
				<ul>
					<li>
						<figure><img src="{{asset('admin/img/avatar1.jpg')}}" alt=""></figure>
						<h4>Jurnal de tensiune nr.1<i class="unread">Necitit</i></h4>
                        <p>Trimis in 25.07.2022</p>
                        <ul class="buttons">
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-envelope-open"></i> Mesaj</a></li>
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-envelope-open"></i> Scrisoare medicala</a></li>
						</ul>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Vezi jurnal</a>
					</li>
				</ul>
			</div>
            <div class="list_general">
				<ul>
					<li>
						<figure><img src="{{asset('admin/img/avatar1.jpg')}}" alt=""></figure>
						<h4>Jurnal tensiune din 25.07.2022<i class="unread">Citit</i></h4>
                        <p>Trimis in 22.07.2022</p>
                        <ul class="buttons">
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-envelope-open"></i> Mesaj</a></li>
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-envelope-open"></i> Scrisoare medicala</a></li>
						</ul>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-user"></i>Vezi jurnal</a>
					</li>
				</ul>
			</div>
		</div>
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