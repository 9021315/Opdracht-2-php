<?php
    // auteur: Yahia
    // functie: uitleg datum functie

   date_default_timezone_set("Europe/Amsterdam");

   $today = date("j F Y");
   echo "Vandaag is het: $today";

   echo "<br>";

   $time = date("H:i");
   echo "Het is nu: $time uur";

   echo "<br>";

   $month = date("F");
   $daysinmonth = date("t");
   echo "Deze maand, $month heeft $daysinmonth dagen";

   echo "<br>";

   $week = date("W");
   echo "Deze week is het week: $week";
   ?>