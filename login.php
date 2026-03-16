<?php
    $pageTitle = "Главная страница"; // Переменная для заголовка в header.php
    require 'includes/header.php';
?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $nameUser = htmlspecialchars($_POST['user']);
	    $namePasswd = htmlspecialchars($_POST['pass']);
    }
?>
<main>
 <h1>Sign In Form</h1>
<div id="wrapper">
	<form id="signin" method="POST" action="" autocomplete="off">
		<input type="text" id="user" name="user" placeholder="username" />
		<input type="password" id="pass" name="pass" placeholder="password" />
		<button type="submit">&#xf0da;</button>
		<p>forgot your password? <a href="#">click here</a></p>
	</form>
</div>
</main>
<?php if (!empty($nameUser): ?>
	<h1><?php echo $nameUser; ?></h1>
<?php endif; ?>
<?php require 'includes/footer.php'; ?>
~                                            
