<?php
$getItems = mysqli_query($connect, "SELECT * FROM goods");
// Cards class 
class GoodsCards{
    // Base variabes
    public $cost,$name,$sale,$image,$stock;
    // Constructor
    function __construct($name,$cost, $image, $sale, $stock )
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->image = $image;
        $this->sale = $sale;
        $this->stock = $stock;
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

$counter = 1;
// Showing up new cards
while($row = mysqli_fetch_assoc($getItems)){
    $card = new GoodsCards($row['Name'],$row['Cost'],$row['ImageLink'],$row['Sale'],$row['In stock']);
    // Checking whethear the items in stock
    $textDecoration = $displaySale = "none";  
    $displaySale = $card->is_sale()[1];
    $textDecoration = $card->is_sale()[2];
    if ($row['In stock'] == 0) continue;
    // Cost in cart in start 
    if($card->is_sale()[0] > 1) $startCost = $card->sale;
    else $startCost = $card->cost;
    // Creating a new cards
    echo 
    "<div class='cards'>
        <div class='cards__image'  style = 'background-image:url(images/".$card->image.")'>
            <div class='set-gray'>
                <div style = 'display : ".$displaySale."' class='toCenter cards__saler font-bold'>Hot sale !</div>
                <div style = 'display : ".$displaySale."' class='cards__sale font-bold '> - ".$card->is_sale()[0]."%</div>
                <div class='toCenter height-full'>
                    <div class='toCenter cards__name font-bold setShadow'>".$card->name."</div>
                </div>
                 <div class='toCenter font-bold setShadow cards__cost-info'>
                    <div class='cards__cost font-bold' style = 'text-decoration:".$textDecoration."' >".$row['Cost']." гривен</div>
                    <div class='cards__cost font-bold' style = 'display : ".$displaySale."'>".$row['Sale']." гривен</div>
                </div>
            </div>
        </div>
            <div class='cards__information'>
                <div class='cards__description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, odio!</div>
           </div>
        <button onclick = 'openCard(".$row['ID'].")' class = 'font-bold cards__button setShadow'>В корзину</button>
    </div>";
    //Creating a cart for purchasing 
    echo "
    <div id = '".$row['ID']."' class='cards__order toCenter'>
        <div class='cards__field'>  
            <p class=  'font-bold toCenter'>".$card->name."</p>
            <input id = 'number".$row['ID']."' onchange = 'calculateSum(".$row['ID'].", ". $card->cost.", ". $card->sale.")' type='number' min = '1' value = '1'>
            <p id = 'sum".$row['ID']."'>".$startCost." Гривен</p>
        </div>
    </div>
    ";
    $counter++;
}

