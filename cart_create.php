<?php

		if(!isset($_SESSION['myCart'])){
			$newCart = $_SESSION['myCart'] = array();
		}
		
			$newCart = $_SESSION['myCart'];
		
		if( array_key_exists($_POST['product_name'], $newCart) )
		{
		
			$newCart[$_POST['product_name']]['qty'] +=$_POST['qty'];
			
		}else{
		
	
			$newCart[$_POST['product_name']]['product_id'] = $_POST['product_id'];
			$newCart[$_POST['product_name']]['product_name'] = $_POST['product_name'];
			$newCart[$_POST['product_name']]['qty'] = $_POST['qty'];
			$newCart[$_POST['product_name']]['unit_price'] = $_POST['unit_price'];
			$newCart[$_POST['product_name']]['picture'] = $_POST['image'];
		}
		

			$_SESSION['myCart'] = $newCart;
		
	
?>