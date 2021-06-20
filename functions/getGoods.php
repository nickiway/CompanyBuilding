<?php
class GoodsCards{
    public $cost,$name,$sale,$image,$stock;
    function __construct($name,$cost, $image, $sale, $stock )
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->image = $image;
        $this->sale = $sale;
        $this->stock = $stock;
    }
    function is_sale (){
        $percent = 0 ;
        if($this->sale != 0){
            $percent = round(100 - ($this->sale * 100 / $this->cost));
            return array($percent,"block","line-through");
        }   else return array(0,"none","none");
        
    }
}
$getItems = mysqli_query($connect, "SELECT * FROM goods");
while($row = mysqli_fetch_assoc($getItems)){
    $class = new GoodsCards($row['Name'],$row['Cost'],$row['ImageLink'],$row['Sale'],$row['In stock']);
    // Checking whethear the items in stock
    $textDecoration = "none";  
    $displaySale = "none";
    $displaySale = $class->is_sale()[1];
    $textDecoration = $class->is_sale()[2];
    if ($row['In stock'] == 1) {
    } else {
        continue;
    }
    // creating new cards
    echo 
    "<div class='cards'>
        <div style = 'display : ".$displaySale."' class='cards__sale font-bold setShadow'>Скидка — ".$class->is_sale()[0]."%</div>
        <div class='cards__image'  style = 'background-image:url(images/".$row['ImageLink'].")'></div>
            <div class='cards__information'>
                <div class='cards__name toCenter font-bold'>".$class->name."</div>
                <div class='cards__details'>
                    <div class='cards__description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, odio!</div>
                    <div class='toCenter'>
                        <div class='cards__cost font-bold' style = 'text-decoration:".$textDecoration."' >".$row['Cost']." гривен</div>
                        <div class='cards__cost font-bold' style = 'display : ".$displaySale."'>".$row['Sale']." гривен</div>
                    </div>
                </div>
           </div>
        <button class = 'font-bold cards__button setShadow'>В корзину</button>
    </div>";
}

