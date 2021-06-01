<?php
session_start();
if (isset($_SESSION['cart'])) {
	$checker=array_column($_SESSION['cart'], 'item_name');
	if(in_array($_GET['cart_name'], $checker)){
		echo "<script>alert('Product Is Already In The Cart');
			window.location.href='product.php';
		</script>";
	}else{

	$count=count($_SESSION['cart']);
	$_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price'], 'quantity'=>1 );
	echo "<script>alert('Product Added');
	window.location.href='product.php';
	</script>";
	}
} else {
	$_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price'], 'quantity'=>1);
	echo "<script>alert('Product Added');
	window.location.href='product.php';
	</script>";
}
?>