<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByMenuID = $db_handle->runQuery("SELECT * FROM menus WHERE id='" . $_GET["id"] . "'");
			$itemArray = array($productByMenuID[0]["id"]=>array('name'=>$productByMenuID[0]["name"], 'id'=>$productByMenuID[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByMenuID[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByMenuID[0]["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByMenuID[0]["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />

<style>
	.image img {
		width: 443px;
		height: 150px;
	}
</style>

</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a> &emsp;
<!--<form style="display:inline-block" action="processBook.php" method="post" >
<input id="btnEmpty" type="submit" name="next" value="Next"> </input>
</form>-->
<a id="btnEmpty" style="float: left" href="next.php">Next</a>

<?php
if(isset($_SESSION["cart_item"])){
    $orderQuantity = 0;
    $orderTotal = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Ticket Name</th>
<th style="text-align:left;">id</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		$item_price = $item["quantity"]*$item["price"];
		
		?>
				<tr>
				<td><img src="<?php echo 'imageView2.php?id='.$item["id"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "RM ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$orderQuantity += $item["quantity"];
				$orderTotal += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $orderQuantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "RM ".number_format($orderTotal, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM menus");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item image" style="width: 40%">
			<form method="post" action="index.php?action=add&id=<?php echo $product_array[$key]["id"]; ?>">
			<div class="product-image"><img style="margin: 10px;" src="<?php echo 'imageView2.php?id='.$product_array[$key]['id']; ?>"></div>

			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "RM".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</BODY>
</HTML>