<?php
function greet(string $language): string {
  // your code here
  $greeting = array("english"=>"Welcome", "czech"=>"Vitejte","danish"=>"Velkomst",
                    "dutch"=>"Welkom","estonian"=>"Tere tulemast","finnish"=>"Tervetuloa",
                    "flemish"=>"Welgekomen","french"=>"Bienvenue","german"=>"Willkommen",
                    "irish"=>"Failte","italian"=>"Benvenuto","latvian"=>"Gaidits",
                    "lithuanian"=>"Laukiamas","polish"=>"Witamy","spanish"=>"Bienvenido",
                    "swedish"=>"Valkommen","welsh"=>"Croeso");
    foreach($greeting as $key => $value) {
      if($language == $key){ 
        return $value;
    } 
  } 
  return "Welcome";
}
// IKTC
