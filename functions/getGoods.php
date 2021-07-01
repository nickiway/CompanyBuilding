<?php
$getItems = mysqli_query($connect, "SELECT * FROM goods");
// Cards class 
class GoodsCards{
    // Base variabes
    public $cost,$name,$sale,$image,$stock,$description;
    // Constructor
    function __construct($name,$cost, $image, $sale, $stock, $description )
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->image = $image;
        $this->sale = $sale;
        $this->stock = $stock;
        $this->description = $description;
    }
    //Checking the sale of cards goods. 
    function is_sale (){
        $percent = 1 ;
        if($this->sale != 0){
            $percent = round(100 - ($this->sale * 100 / $this->cost));
            return array($percent,"block","line-through");
        }   else return array(0,"none","none");
        
    }
}
// Showing up new cards
while($row = mysqli_fetch_assoc($getItems)){
    $card = new GoodsCards($row['Name'],$row['Cost'],$row['ImageLink'],$row['Sale'],$row['In stock'],$row['Description']);
    // Checking whethear the items in stock
    $textDecoration = $displaySale = "none";  
    $displaySale = $card->is_sale()[1];
    $textDecoration = $card->is_sale()[2];
    if ($textDecoration != "none") {
        $costColor = "gray";
        $fontSize = "16px";
    } else $costColor = $fontSize = null;
    if ($row['In stock'] == 0) continue;
    // Cost in cart in start 
    if($card->is_sale()[0] > 1) $startCost = $card->sale;
    else $startCost = $card->cost;
    // Creating a new cards
    echo 
    "<div class='cards'>
        <img src='icons/add.png' class = 'right-side' alt='more'>
        <img onclick = 'openCard(".$row['ID'].")'src='icons/more.png' class = 'left-side' alt='more'>
        <div class='cards__image'  style = 'background-image:url(images/".$card->image.")'></div>
            <div class='cards__information'>
                <div class= 'display-flex align-center '>
                    <span class='cards__name  font-bold '>".$card->name."</span>
                    <span class='cards__cost ' style = 'display : ".$displaySale."'>₴".$row['Sale']."</span>
                    <span class='cards__cost ' style = 'text-decoration:".$textDecoration."; color:".$costColor."; font-size : ".$fontSize."' >₴".$row['Cost']."</span>
                </div>
                <div class='cards__description'>".mb_strimwidth($card->description,0,100,'...')."</div>
           </div>
    </div>";
    //Creating a cart for purchasing 
    echo "
    <div id = '".$row['ID']."' class='cards__order toCenter'>
        <div class='cards__field'>  
        <div class='cards__image' style = 'background-image:url(images/".$card->image.")'></div>
            <p class=  'font-bold toCenter'>".$card->name."</p>
            <input id = 'number".$row['ID']."' onchange = 'calculateSum(".$row['ID'].", ". $card->cost.", ". $card->sale.")' type='number' min = '1' value = '1'>
            <p id = 'sum".$row['ID']."'>".$startCost." Гривен</p>
        </div>
    </div>
    ";
    }

