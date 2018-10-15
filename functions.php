<?php

Use \Hcode\Model\User;
Use \Hcode\Model\Cart;

function formatPrice($vlprice) 
{	

	if (!$vlprice > 0) $vlprice = 0 ;
	
	return number_format($vlprice, 2, ",", ".");

} 

function checkLogin($inadmin = true)
{

	return User::checkLogin($inadmin);

}

function getUserName()
{

	$user = User::getFromSession();
	
	return $user->getdesperson();

}

function getCartNrQtd()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getproductsTotals();

	return $totals['nrqtd'];

}

function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getproductsTotals();

	return formatPrice($totals['vlprice']);

}


?>