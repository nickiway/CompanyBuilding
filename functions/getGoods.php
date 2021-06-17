<?php
$getItems = mysqli_query($connect, "SELECT * FROM goods");
while($row = mysqli_fetch_assoc($getItems)){
    $percent = 0;
    // Checking whethear we have sales
    if ($row['Sale'] == 0) {
        $displaySale = "none";
        $textDecoration = "none";
    } else {
        $percent = round(100 - ($row['Sale'] * 100 / $row['Cost']));
        $displaySale = "block";
        $textDecoration = "line-through";
    };
    // Checking whethear the items in stock
    if ($row['In stock'] == 1) {
    } else {
        continue;
    }
    // creating new cards
    echo 
    "<div class='cards'>
        <div style = 'display : ".$displaySale."' class='cards__sale font-bold setShadow'>Скидка — ".$percent."%</div>
    
        <div class='cards__image'  style = 'background-image:url(images/".$row['ImageLink'].")'></div>

        <div class='cards__information'>
            <div class='cards__name toCenter font-bold'>".$row['Name']."</div>
            <div class='cards__details'>
                <div class='cards__description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, odio!</div>
                <div class='toCenter'>
                    <div class='cards__cost font-bold' style = 'text-decoration:".$textDecoration."' >".$row['Cost']." гривен</div>
                    <div class='cards__cost font-bold' style = 'display : ".$displaySale."'>".$row['Sale']." гривен</div>
                </div>
            </div>

            <button class = 'font-bold cards__button setShadow'>В корзину</button>
        </div>
    
    </div>";
}

