<?php
if (!isset($_COOKIE['cart'])) {
	setcookie('cart', json_encode(array()));
}

// Als de cookie bestaat dan word de JSON array omgezet naar een PHP array. 
if (isset($_COOKIE['cart'])) {
	$cart = json_decode($_COOKIE['cart'], true);
}

// Als de GET variabelen aanwezig zijn wordt de onderstaande code uitgevoerd. 
if (isset($_GET)) {
	
	// De GET variabele func wordt ondergebracht in een apparte variabele. 
    $func = $_GET['func'];
    
	// Als func gelijk is aan add dan word de add functie uitgevoerd en worden cart, product id en aantal meegestuurd.
	if ($func == 'add') $cart = add($cart, (int)$_GET['itemid'], (int)$_GET['amount']);
	// Als func gelijk is aan remove word de remove functie uitgevoerd. 
	if ($func == 'remove') $cart = remove($cart, (int)$_GET['itemid']);
	
	// Als de functies zijn uitgevoerd is de variabele cart aangepast. 
	// Hieronder word de cookie cart weer gevuld met een JSON array
	// Daarna wordt de vorige pagina herladen. 
    setcookie( 'cart', json_encode($cart));
    
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        header('Location: http://www.djalla2gshop.org/?pageid=index2');
    }
}
$itemid = $_POST['itemid'];
$result = mysqli_query($conn, "SELECT * FROM `product` WHERE `itemid`='$itemid'");
function add($cart, $itemid, $ammount) {
    var_dump($itemid); 
	if (isset($cart[$itemid])) {
		$cart[$itemid] = $cart[$itemid] + $ammount;
	} else {
		$cart[$itemid] = $ammount;
	}
	return $cart;
}

// Deze functie heeft maar 2 variabelen nodig.
// Cart = array, komt uit de cookie. Prodid komt uit de url.
// Met de product id kan er gezocht worden op product en dan wordt die verwijderd.  
function remove($cart, $itemid) {
	if (isset($cart[$itemid])) {
		unset($cart[$itemid]);
	}
	return $cart;
}
?>