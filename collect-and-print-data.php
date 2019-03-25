<?php
$selectedItems = [];

if(sizeof($_GET)>0) {
  for($i=0; $i < sizeof($products); $i++) {
    if(isset($_GET["prod-id"]) && $_GET["prod-id"] === $products[$i]["id"]) {
      array_push($selectedItems, $products[$i]);
    }
  }
} else {
  for ($i=0; $i < sizeof($products); $i++) {
    array_push($selectedItems, $products[$i]);
  }
}

$markup = NULL;

if (sizeof($selectedItems)>0) {
for ($i=0; $i < sizeof($selectedItems) ; $i++) {
  $markup.= "<a href=\"./index.php?prod-sn={$selectedItems[$i]["sn"]}&prod-id={$selectedItems[$i]["id"]}\"><div class=\"col s12 m12 l4\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <img src=\"{$selectedItems[$i]["thumbnail"]}\">
                </div>
                <div class=\"card-content\">
                  <span class=\"card-title\">{$selectedItems[$i]["type"]}</span>
                  <p class=\"price\">{$selectedItems[$i]["price"]}</p>
                </div>
              </div>
            </div></a>";
}
} ?>
