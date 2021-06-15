<?php
$getItems = mysqli_query($connect, "SELECT * FROM goods");
while($row = mysqli_fetch_assoc($getItems)){
    if ($row['Sale'] == 0) {
        $displaySale = "none";
        $textDecoration = "none";
    } else {
        $percent = round(100 - ($row['Sale'] * 100 / $row['Cost']));
        $displaySale = "block";
        $textDecoration = "line-through";
    };
    if ($row['In stock'] == 1) {
        $inStock = 'display:none';
        $hideButton = 'display:block';
    } else {
        $inStock = 'display:block';
        $hideButton = 'display:none';
    }
    echo 
    "<div class='cards'>
        <div style = 'display : ".$displaySale."' class='cards__sale font-bold setShadow'>Скидка — ".$percent."%</div>
    
        <div class='cards__image'  style = 'background-image:url(images/".$row['ImageLink'].")'></div>

        <div class='cards__information'>
            <div class='cards__name toCenter font-bold'>".$row['Name']."</div>
            <hr size = '2px' color = '#000'>
            <div class='cards__details'>
                <div class='cards__description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, odio!</div>
                <div class='toCenter'>
                    <div class='cards__cost font-bold' style = 'text-decoration:".$textDecoration."' >".$row['Cost']." гривен</div>
                    <div class='cards__cost font-bold' style = 'display : ".$displaySale."'>".$row['Sale']." гривен</div>
                </div>
            </div>
            <button style = '".$hideButton." 'class = 'font-bold cards__button setShadow'>В корзину</button>
            <div class='toCenter cards__stock font-bold' style = '".$inStock."'>Нет в наличии</div>
        </div>
    
    </div>";
}

