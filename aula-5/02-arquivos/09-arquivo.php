<?php 
/*Gerador de INDEX*/

function dirToArray($dir) {
  
  $result = array();
  $cdir = scandir($dir);

  foreach ($cdir as $key => $value)
  {
     if (!in_array($value,array(".","..")))
     {
        if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
        {
           $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
        }
        else
        {
           $result[] = $value;
        }
     }
  }
 
  return $result;
}

$diretorios = dirToArray(__DIR__ . "/../");
$htmlIndex = fopen(__DIR__."\\..\\index.html", "w")  or die("Unable to open file!");
$templatePasta = "<h2>%1\$s</h2>\n";
$templateLink = "<a href='%1\$s/%2\$s'>%2\$s</a><br>\n";
fwrite($htmlIndex, "<html>\n<body>\n");

foreach ($diretorios as $diretorio => $arquivos) {    
    
    if($diretorio != "0")
    {
        fwrite($htmlIndex, sprintf($templatePasta, $diretorio));

        foreach ($arquivos as $arquivo) {
            fwrite($htmlIndex, sprintf($templateLink, $diretorio, $arquivo));        
        }
    }
}

fwrite($htmlIndex, "</body>\n</html>");
fclose($htmlIndex);