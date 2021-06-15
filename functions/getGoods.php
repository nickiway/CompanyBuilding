<?php
$getItems = mysqli_query($connect, "SELECT * FROM goods");
while($row = mysqli_fetch_assoc($getItems)){
    echo "<div class='cards'>
        <div class='cards__sale setShadow'>Sale -50%</div>
        <div class='cards__image'  style = 'background-image:url(images/".$row['ImageLink'].")'></div>
        <div class='cards__information'>
            <div class='cards__name toCenter font-bold'>Lorem ipsum dolor sit.</div>
            <div class='cards__details'>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quod praesentium blanditiis harum distinctio ad. Autem officiis eligendi perferendis? Nisi ducimus vero quam voluptatem eius quo a cum fugit! Exercitationem.
            </div>
            <button class = 'cards__button'>В корзину</button>
        </div>
    </div>";
}

