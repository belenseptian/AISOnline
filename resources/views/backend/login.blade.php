<!DOCTYPE html>
<html>

<head>
	<title>Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ url('/') }}/public/css/bootstrap.css" rel="stylesheet" />
	<link href="{{ url('/') }}/public/css/custom-admin.css" rel="stylesheet" />
	<link rel="shortcut icon" href="{{ url('/') }}/public/favicon.ico">
</head>

<body>
	<div class="container">
		<?php

		?>
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h5 class="card-title text-center"><b>IoAIS v1.0</b></h5>
						<center>Internet of AIS</center>
						@if(session('error'))
						<div class="alert alert-danger">
							<b>Error:</b> {{session('error')}}
						</div>
						@endif
						<form class="form-signin" method="post" action="{{ route('actionlogin') }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-label-group">
								<input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" autocomplete="off" required>
								<label for="inputEmail">Username</label>
							</div>

							<div class="form-label-group">
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Kata Sandi" autocomplete="off" required>
								<label for="inputPassword">Password</label>
							</div>
							<hr class="my-4">
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ url('/') }}/public/js/bootstrap.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/public/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/public/js/custom.js"></script>
</body>

</html>