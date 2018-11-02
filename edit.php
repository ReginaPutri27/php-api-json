<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h2>Edit data pada database</h2>
	</div>
	<br/>

	<section id="input-form">
		<form action="edit_aksi.php" method="post">
			<div class="form">
				<label>id</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>fullname</label>
				<input type="text" name="fullname">
			</div>
			<a href="index.php">Lihat Semua Data</a>
			<div class="form">
				<input type="submit" name="submit"
				value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>
</body>
</html>