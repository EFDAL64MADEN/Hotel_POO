<?php

include("Hotel.php");
include("Client.php");
include("Chambre.php");
include("Reservation.php");

$hotel1 = new Hotel("Hilton", 4, "Blalala", "68000", "Colmar");

$chambre1 = new Chambre("2", "2", true, 649.99, $hotel1);
echo $chambre1;

?>