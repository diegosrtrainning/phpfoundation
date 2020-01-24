<?php

/*
*/
        $nomeErr = "";
        $nomeErrClass = $generoErrClass = $habilidadesErrClass = $timeErrClass = "";
        $nome = $genero = $habilidades = $time = "";
        $html5 = $css3 = $phpF = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") { 

            if(empty($_POST["nome"])){
                $nomeErr = "Nome é obrigatório";
                $nomeErrClass = "erro";
            } else {
              $nome = test_input($_POST["nome"]);
            }
            
            if(empty($_POST["genero"])){                
                $generoErrClass = "erro";
            } else {
              $genero = $_POST["genero"];
            }

            if(empty($_POST["habilidades"])){                
                $habilidadesErrClass = "erro";
            } else {
              $habilidades = $_POST["habilidades"];

              $html5 = array_search("html5", $habilidades) === false ? "" : "checked";
              $css3 = array_search("css3", $habilidades) === false ? "" : "checked";
              $phpF = array_search("phpF", $habilidades) === false ? "" : "checked";

            }

            $time = isset($_POST['time']) ? $_POST['time'] : false;
            
            if($time === ""){                
                $timeErrClass = "erro"; 
            }
        }        

        function test_input($texto) {
          $texto = trim($texto);
          $texto = stripslashes($texto);
          $texto = htmlspecialchars($texto);
          return $texto;
      }
    ?>