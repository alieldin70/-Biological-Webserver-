<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$strbio="ATGCTATAC";
function GC_Count($strbioo)
{
    $length=strlen($strbioo);
    $count=0;
    for ($i=0; $i <$length ; $i++) { 
     if ($strbioo[$i]=='G'||$strbioo[$i]=='C'||$strbioo[$i]=='c'||$strbioo[$i]=='g') {
        $count=$count+1;
     }  
    }
    $GC=($count/$length)*100;
    echo "GC content is".$GC;
}

function Complement($strr)
{
    $length=strlen($strr);
    $comstr='';
    for ($i=0; $i <$length ; $i++) { 
    switch($strr[$i]){
  case'A':
    $comstr= $comstr.'T';
    break;
    case'T':
        $comstr= $comstr.'A';
        break;
   case'C':
       $comstr= $comstr.'G';
        break;
   case'G':
       $comstr= $comstr.'C';
        break;
    }
     }
     echo "The Compelment Strand is".$comstr;  
    }
    function Reverse_Complement($strr)
    {
        $length=strlen($strr);
        $comstr='';
        for ($i=$length-1; $i >=0; $i--) { 
        switch($strr[$i]){
      case'A':
        $comstr= $comstr.'T';
        break;
     case'T':
         $comstr= $comstr.'A';
         break;
     case'C':
         $comstr= $comstr.'G';
         break;
     case'G':
         $comstr= $comstr.'C';
         break;
        }
         }
         echo "The  Reverse Compelment Strand is".$comstr;  
        }
   echo Reverse_Complement($strbio)


?>
</body>
</html>