<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> -->
</head>
<body style="margin: 0; font-family: helvetica; font-size: 14px;">
	<style>
		/* #content {
			width: 80%;
			margin: auto;
			font-family: helvetica;
			font-size: 14px;
		}

		.card-header, .card-footer {
			color: #fff;
			padding: 10px 20px;
		}
		.card-header {
			background-color: #337abd;
		}
		.card-header h4{
			margin: 0;
		}

		.card-body {
			padding: 0 40px;
		}
		.card-body table {
			width: 100%;
			border-spacing: 0;
			font-size: small;
		}
		.card-body table th, .card-body table td {
			border: 1px solid #ccc;
			padding: 5px;
		}

		.card-footer {
			background-color: #000;
			text-align: right;
		} */

		/* For mobile phones: */
		[class*="col-"] {
			width: 100%;
		}
		table {
			font-size: 12px;
		}

		@media only screen and (min-width: 768px) {
			/* For desktop: */
			table {font-size: 14px;}
			.col-md-1 {width: 8.33%;}
			.col-md-2 {width: 16.66%;}
			.col-md-3 {width: 25%;}
			.col-md-4 {width: 33.33%;}
			.col-md-5 {width: 41.66%;}
			.col-md-6 {width: 50%;}
			.col-md-7 {width: 58.33%;}
			.col-md-8 {width: 66.66%;}
			.col-md-9 {width: 75%;}
			.col-md-10 {width: 83.33%;}
			.col-md-11 {width: 91.66%;}
			.col-md-12 {width: 100%;}
		}
	</style>

	<div class="mt-5">
		<div class="row">
			<div id="content" class="col-12 col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header pt-3 pb-3" style="padding: 20px; color: #fff; background-color: #337abd; text-align: center;">
						<h2 class="text-center text-white m-0" style="margin: 0;">Contact</h2>
					</div>
					<div class="card-body" style="padding: 20px;">
						<p style="color: #000;">Hello Irfan,</p>
						<p style="color: #000;">Someone has contact you via your website protofolio</p>
						
						<small>From</small> <br>
                        {{ $email }}
                        <br><br>

						<small>Subject</small> <br>
                        {{ $subject }}
                        <br><br>

						<small>Message</small> <br>
                        {{ $msg }}
					</div>
					<div class="card-footer" style="background-color: #000; color: #fff; padding: 20px; text-align: right;">
						<div class="float-right">
							<small>Irfan Maulana's Portofolio</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>