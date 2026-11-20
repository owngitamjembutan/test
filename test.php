
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initisl-scale=1.0">
	<title>Contoh HTML,CSS,dan JAVASCRIPT</title>

<style>
	body {
		font-family: Arial,sans-serif;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		margin: 0;
		background-color: #f0f3f5;
		transition: background-color 0.5s ease;
	}

	.container {
		text-align: center;
		background-color: #ffffff;
		padding: 20px;
		border-radius: 12px;
		box-shadow: 0 4px 10px rgba(0,0,0,0.1);
	}

	h1 {
		color: #333333;
	}

	p {
		color: #666666;
	}

	button {
		padding: 12px 24px;
		font-size: 16px;
		color: #ffffff;
		background-color: #007bff;
		border: none;
		border-radius: 6px;
		cursor: pointer;
		transition: background-color 0.3s;
	}
</style>
</head>
<body>

	<div class="container">
		<h1 id="judul">Halo!</h1>
		<p id="teks">Klik Tombol di Bawah untuk mengubah warna latar belakang.</p>
		<button onclick="ubahwarna()">Klik Saya<"/button>
	</div>

	<script>
		const  warnalist = ['#ffadad', '#ffd6a5', '#fdffb6', '#9bf6ff', '#a0c4ff', '#bdb3ff'];

			function ubahwarna() {
				const warnaAcak = warnalist[Math.floor(Math.random() * warnalist.length)];

				document.body.style.backgroundColor = warnaAcak;
				document.getElementById('judul').innerText = 'warna Berubah!';
				document.getElementById('teks').innerText = 'warna latar belakang saat ini: ${warnaAcak}';
			}
	</script>
</body>
</html>