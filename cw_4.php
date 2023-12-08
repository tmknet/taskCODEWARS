<?php
function people_with_age_drink(int $old): string {
    switch (true) {
       case $old >= 21:
              return "drink whisky";
          case $old >= 18:
              return "drink beer";
          case $old >= 14:
              return "drink coke";
          case $old <= 14:
              return "drink toddy";
          default:
              return "It's the weekend!";
    }
    }
  echo people_with_age_drink(13);