<?php
// Sorting
if(empty($_GET['sort']) == false)
{
    switch ($_GET['sort']) {
        case 'Name': $sort = "Name"; break;
        case 'Name-desc': $sort = "Name DESC";  break;
        case 'Cost': $sort = "Cost-Sale"; break;
        case 'Cost-desc': $sort = "Cost - Sale DESC"; break;
        default: $sort = "ID"; break;
    }
} else $sort = "ID";
