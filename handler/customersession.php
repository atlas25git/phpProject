<?php
if (empty($_SESSION['email'] AND $_SESSION['password'])) {
	echo "<script> alert('Please Log In');
		window.location.href='customerforms.php';
		</script>";
}




?>