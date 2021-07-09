<?php
require_once("cardClass.php");
// Cards class 
$getItems = mysqli_query($connect, "SELECT * FROM goods WHERE Name LIKE '%$getQuerySerach%' ORDER BY  $sort");
// Showing up new cards
 while($cardItem = mysqli_fetch_assoc($getItems)){
    $card = new GoodsCards($cardItem['Name'],$cardItem['Cost'],$cardItem['ImageLink'],$cardItem['Sale'],$cardItem['In stock'],$cardItem['Description']);
    // Checking whethear the items in stock
    $textDecoration = $displaySale = "none";  
    $displaySale = $card->is_sale()[1];
    $textDecoration = $card->is_sale()[2];
    // Cost of goods with sale
    $deltaCost = intval($card->cost - $card->sale);
    if ($cardItem['In stock'] == 0 || $deltaCost < 0) continue;
    // Cost in cart in start 
    if($card->is_sale()[0] > 1) $startCost = $card->sale;
    else $startCost = $card->cost;
    // Creating a new cards
    echo 
    "<div class='cards'>
        <img onclick = 'addCart(\"{$cardItem['ID']}\",\"{$card->name}\",\"{$deltaCost}\",\"{$card->image}\")' src='icons/add.png' id = 'cart".$cardItem['ID']."' data-image = '".$card->image."' data-name = '".$card->name."' class = 'right-side' alt='more'>
        <img onclick = 'openCard(".$cardItem['ID'].")'src='icons/more.png' class = 'left-side' alt='more'>
        <div class='cards__image'  style = 'background-image:url(images/".$card->image.")'></div>
            <div class='cards__information'>
                <div class= 'display-flex align-center '>
                    <span class='cards__name  font-bold '>".$card->name."</span>
                    <span class='cards__cost ' style = 'display : ".$displaySale."'>₴".$deltaCost."</span>
                    <span class='cards__cost ".$card->is_sale()[3]."' style = 'text-decoration:".$textDecoration.";' >₴".$cardItem['Cost']."</span>
                </div>
                <div class='cards__description'>".mb_strimwidth($card->description,0,100,'...')."</div>
           </div>
    </div>";
    
    //Creating a cart for purchasing 
    echo "
    <div id = '".$cardItem['ID']."' class='cards__details toCenter'>
        <div class='cards__field'>  
            <div class='cards__image' style = 'background-image:url(images/".$card->image.")'></div>
            <p class=  'font-bold toCenter'>".$card->name."</p>
            <input id = 'number".$cardItem['ID']."' onchange = 'calculateSum(".$cardItem['ID'].", ". $card->cost.", ". $card->sale.")' type='number' min = '1' value = '1'>
            <p id = 'sum".$cardItem['ID']."'>".$startCost." Гривен</p>
            <p>".$card->description."</p>
        </div>
    </div>
    ";
    }
    //Case search result = null
    if (mysqli_num_rows($getItems) == 0) echo "Sorry, we haven't found anything :( ";