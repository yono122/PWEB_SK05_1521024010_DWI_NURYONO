<!DOCTYPE html>
<html>
<head>
    <title>Studi kasus 5_4 Dwi Nuryono</title>
</head>
<body>

    <?php
        $i=5;
        for ($c=0;$c<=95;$c++)
        {
            $a=5;
            $a=$a+$c;
            $angka[$c][0]=$a;
            for ($b=0;$b<=998;$b++)
            {
                if ($b<=0){
                $i=$a;}
                $i=$i+5;
                $angka[$c][$b+1]=$i;                
            }
        }

        for ($c=0;$c<=95;$c++)
        {        
            echo "&nbsp ".$angka[$c][0];
            for ($b=0;$b<=37;$b++)
            {
               echo "&nbsp ".$angka[$c][$b+1];
                
            }
            echo " .... ".$angka[$c][999];
            echo "<br>";
        }

    ?>

</body>
</html>