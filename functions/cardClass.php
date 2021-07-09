<?php
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
            return array($percent,"block","line-through","cards__sale");
        }   else return array(0,"none","none",null);
        
    }
}