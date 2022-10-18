{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6">
						<h1>Aproape de medicul tau</h1>
						<p class="lead">Va multumim pentru interesul dvs de a intra in comunitatea Medisbook.ro!</p>
					</div>
					<!-- /col -->
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<div id="message-register"></div>
							<form action="{{route('register-user') }}" method="POST" enctype="multipart/form-data">
								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
                                @csrf
								<div class="row">
									<h3>Date Personale</h3>
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nume" name="name" id="name" value="{{old('name')}}">
											<span class="text-danger">@error('name') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Adresa" name="adress" id="adress" value="{{old('adress')}}">
											<span class="text-danger">@error('adress') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Oras" name="city" id="city" value="{{old('city')}}">
											<span class="text-danger">@error('city') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Judet" name="county" id="county" value="{{old('county')}}">
											<span class="text-danger">@error('county') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Telefon" name="phone" id="phone" value="{{old('phone')}}">
											<span class="text-danger">@error('phone') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="date" class="form-control" placeholder="Data nasterii" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}">
											<span class="text-danger">@error('adress') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<h3>Date utilizator</h3>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" class="form-control"  placeholder="Adresa de email" name="email" id="email" value="{{old('email')}}">
											<span class="text-danger">@error('working_at') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Parola" name="password" id="password" value="{{old('password')}}">
											<span class="text-danger">@error('password') {{ $message }} @enderror</span>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirma parola" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}">
											<span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Inregistrare"  id="Register"></div>
							<br>
                            <a href="/login">Daca ai deja cont autentifica-te aici!</a>
                            </form>
						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	<!-- /main -->
    @endsection