<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 5_3 Dwi nuryono</title>
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
                //echo "  ".$i;
            }

        }
        

	?>

</body>
</html>