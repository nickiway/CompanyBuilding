<?php
// Sorting
if(empty($_GET['sort']) == false)
{
    switch ($_GET['sort']) {
        case 'Name': $sort = "Name"; $sortLable = "Сортировать по имени (по возвростанию)"; break;
        case 'Name-desc': $sort = "Name DESC";  $sortLable = "Сортировать по имени (по убыванию)"; break;
        case 'Cost': $sort = "Cost-Sale"; $sortLable = "Сортировать по имени (по возвростанию)"; break;
        case 'Cost-desc': $sort = "Cost - Sale DESC"; $sortLable = "Сортировать по цене (по убыванию)"; break;
        default: $sort = "ID"; $sortLable = "Сортировать по имени (по возвростанию)"; break;
    }
} else {
    $sort = "ID";
    $sortLable = "Сортировать по имени (по возвростанию)";  
} 
