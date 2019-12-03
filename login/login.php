<head>
	<style type="text/css">
		.form{
			border: 1px solid black;
			width: 30%;
			margin: 80px auto;
			padding: 45px 0;
			display: flex;
			justify-content: center;

		}

	</style>

</head>

<body>
	<div class="container">
		<div class="tab">
			
		</div>
		<div class="form">
			<form method="POST" action="login_process.php">
				<table>
					<tr><td>
						<label>
							Email : <br>
							<input type="email" name="email" />
						</label>
					</td></tr>
					<tr><td>
						<label>
						Password : <br>
						<input type="password" name="pass" />
						</label>
					</td></tr>
					<tr><td>
						<input type="submit" value="Login" />
					</td></tr>
				</table>
			</form>
		</div>
	</div>
</body>
