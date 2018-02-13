<?php 

$participantMessage = "Cześć " . $_POST["name"] . "," . "</br>" . "dziękuję za rejestrację. Cieszę się, że dołączysz do mnie, podczas warsztatów! </br></br>W kolejnych mailach będę wysyłać Ci wszystkie ważne informacje, dotyczące naszego spotkania. </br></br></br>Miłego dnia! </br>Kuba";

print $participantMessage; 


$hostMessage = "Cześć Jakubie, </br>" . "uzytkownik" . $_POST["name"] . $_POST["lastname"] . $_POST["email"] . "zarejestrował się na warsztaty." ;
if($_POST["message"]){
    $hostMessage .= $_POST["message"];
}
$hostMessage .= "Pamiętaj, aby wysłać mu wszystkie potrzebne informacje. </br></br> Tabaluga";

print $hostMessage; 