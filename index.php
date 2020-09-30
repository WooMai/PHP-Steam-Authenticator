<?php

require_once("SteamAuth.php");

$SteamAuth = new SteamAuth;
echo $SteamAuth->GenerateSteamGuardCode("2Q95X76F/VTGj+9XpSShxUBddss=");
