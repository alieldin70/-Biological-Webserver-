<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            html
            {
                background-image: url(backgroun2.jpg);
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>

    <body>
    <?php
            $strbio= $_POST['userseq'];
            function GC_Count($strbioo)
            {
                $length=strlen($strbioo);
                $count=0;
                for ($i=0; $i <$length ; $i++)
                { 
                    if ($strbioo[$i]=='G'||$strbioo[$i]=='C'||$strbioo[$i]=='c'||$strbioo[$i]=='g')
                    {
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
                for ($i=0; $i <$length ; $i++) 
                { 
                    switch($strr[$i])
                    {
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
                for ($i=$length-1; $i >=0; $i--) 
                { 
                    switch($strr[$i])
                    {
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
            function translate($strr)
            {
                $dic = [
                    'ATA'=>'I', 'ATC'=>'I', 'ATT'=>'I', 'ATG'=>'M',
                    'ACA'=>'T', 'ACC'=>'T', 'ACG'=>'T', 'ACT'=>'T',
                    'AAC'=>'N', 'AAT'=>'N', 'AAA'=>'K', 'AAG'=>'K',
                    'AGC'=>'S', 'AGT'=>'S', 'AGA'=>'R', 'AGG'=>'R',                
                    'CTA'=>'L', 'CTC'=>'L', 'CTG'=>'L', 'CTT'=>'L',
                    'CCA'=>'P', 'CCC'=>'P', 'CCG'=>'P', 'CCT'=>'P',
                    'CAC'=>'H', 'CAT'=>'H', 'CAA'=>'Q', 'CAG'=>'Q',
                    'CGA'=>'R', 'CGC'=>'R', 'CGG'=>'R', 'CGT'=>'R',
                    'GTA'=>'V', 'GTC'=>'V', 'GTG'=>'V', 'GTT'=>'V',
                    'GCA'=>'A', 'GCC'=>'A', 'GCG'=>'A', 'GCT'=>'A',
                    'GAC'=>'D', 'GAT'=>'D', 'GAA'=>'E', 'GAG'=>'E',
                    'GGA'=>'G', 'GGC'=>'G', 'GGG'=>'G', 'GGT'=>'G',
                    'TCA'=>'S', 'TCC'=>'S', 'TCG'=>'S', 'TCT'=>'S',
                    'TTC'=>'F', 'TTT'=>'F', 'TTA'=>'L', 'TTG'=>'L',
                    'TAC'=>'Y', 'TAT'=>'Y', 'TAA'=>'_', 'TAG'=>'_',
                    'TGC'=>'C', 'TGT'=>'C', 'TGA'=>'_', 'TGG'=>'W'
                ];
                $protein = '';
                for($i = 0; $i < strlen($strr); $i += 3)
                    {
                        if($i + 3 > strlen($strr)){break;}
                        $codon = substr($strr, $i, 3);
                        $protein = $protein.$dic[$codon];
                    }
                echo "The Translated Protien is: ".$protein;
            }
            switch($_POST['radio'])
            {
                case 'gc':
                    GC_Count($strbio);
                    break;
                case 'comp':
                    Complement($strbio);
                    break;
                case 'rcomp':
                    Reverse_Complement($strbio);
                    break;
                case 'trans':
                    translate($strbio);
                    break;
            }
        ?>
    </body>
</html>