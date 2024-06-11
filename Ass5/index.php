<?php

echo '
   <style>
     h1{ color: green ;}
    </style>
    <h1>Welcome to my website</h1>
    <script>
    document.querySelector("h1").addEventListener("click", function(){
        alert("Hello");
    },false);
    </script>  <br>

';

echo "ahmed" , "hana", 13 , "mariam<br>" ;

echo "ahmed's gamal<br>" ;
//echo "aaaaa""fffff"; // ERROR

//Heredoc
echo <<<myText
dga\dgsdga"fgdfg"hhsghgh"ghsgg
dasdgdsagdfgfdsagfff
ddsgsdagf
myText ;


?>