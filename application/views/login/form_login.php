<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets\img\login\etc\estilo.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Rationale" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
	<script>
			document.onmousedown = disableClick;

			function disableClick(event){
   				if ( event.button == 2 ) {
      				return false; 
   				} 
			};
		</script>
                
</head>
<body>

<div id="bg"></div>
	<div class="main">
		
		<div class="login-form">
			<div class="logo1">
				<img src="<?= base_url('assets\img\login\cadeado.png') ?>">
			</div>
			<span class="wl">Bem-vindo(a)!</span>
			<form method="POST" action="<?= base_url('trabalho/login') ?>">
				
				<input type="text" id="email" name="email" placeholder="email"><span class="line"></span><label for="email"></label>
				<input type="password" id="senha" name="senha" placeholder="senha"><span class="line"></span><label for="senha"></label>
                                  <input type="submit" name="ir" value="Entrar"><input type="submit" name="ir" class="aa" value="">

			</form>
		</div>

	</div>
    
</div>
</body>
</html>


