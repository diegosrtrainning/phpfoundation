<?php
$cars = array
(
    array("Volvo",22,18, 4),
    array("BMW",15,13, 4),
    array("Saab",5,2,4),
    array("Land Rover",17,15,4)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".\n";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".\n";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".\n";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".\n";

echo "\n\nIteração aninhada";

for ($row = 0; $row < 4; $row++) {
    echo "Linha $row\n";

    for ($col = 0; $col < 3; $col++) {
      echo $cars[$row][$col]."\n";
    }    
  }
?>