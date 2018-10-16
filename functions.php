<?php

Use \Hcode\Model\User;
Use \Hcode\Model\Cart;

function formatPrice($vlprice) 
{	

	if (!$vlprice > 0) $vlprice = 0 ;
	
	return number_format($vlprice, 2, ",", ".");

}

function formatDate($date)
{

	return date('d/m/Y', strtotime($date));

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

function formatAddressUtf8($desaddress)
{

	return utf8_encode($desaddress);

}

function formatDistrictUtf8($desdistrict)
{

	return utf8_encode($desdistrict);

}

function formatCityUtf8($descity)
{

	return utf8_encode($descity);

}

?>