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
$counter = 1;
$getItems = mysqli_query($connect, "SELECT * FROM goods");
while($row = mysqli_fetch_assoc($getItems)){
    $card = new GoodsCards($row['Name'],$row['Cost'],$row['ImageLink'],$row['Sale'],$row['In stock']);
    // Checking whethear the items in stock
    $textDecoration = "none";  
    $displaySale = "none";
    $displaySale = $card->is_sale()[1];
    $textDecoration = $card->is_sale()[2];
    if ($row['In stock'] == 1) {
    } else {
        continue;
    }
    // creating new cards
    echo 
    "<div class='cards' onclick = 'openCard(".$row['ID'].")'>
        <div class='cards__image'  style = 'background-image:url(images/".$card->image.")'>
            <div class='set-gray'>
                <div class='cards__counter toCenter font-bold setShadow'>".$counter."</div>
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
        <button class = 'font-bold cards__button setShadow'>В корзину</button>
    </div>";
    echo "
    <div id = '".$row['ID']."' onclick = 'fadeOut()' class='cards__order'>

    </div>
    ";
    $counter++;
}

