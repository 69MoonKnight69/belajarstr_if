<html>
    <body>
        <?php
        $ciman = 16;
        if ($ciman >=18){
            echo "Anda sudah dewasa."."<br>";
        }elseif ($ciman<0){
            echo "kamu masih kecil"."<br>";
        }else{
            echo "masukan umur yang benar"."<br>";
        }

        $ip = 2;
        if ($ip ==4){
            echo "Kamu Genius"."<br>";
        }elseif($ip==3){
            echo "kamu cerdas"."<br>";
        }else{
            echo "kamu cukup pintar"."<br>";
        }
        
        $networth = 20000;
        if ($networth >=100000000){
            echo "Kamu Kaya"."<br>";
        }elseif($networth>=10000000){
            echo "kamu mencukupi"."<br>";
        }else{
            echo "kamu kurang mencukupi"."<br>";
        }

        $ip2 = 4;
        if ($ip2 <=2){
            echo "Kamu Tidak lulus"."<br>";
        }elseif($ip2==3){
            echo "kamu lulus"."<br>";
        }else{
            echo "kamu sangat lulus"."<br>";
        }
        
        $perut =4;
        if ($perut== 1){
            echo "Kamu Makan dulu"."<br>";
        }elseif($perut==2){
            echo "kamu minum dulu"."<br>";
        }else{
            echo "Kamu tidur dulu"."<br>";
        }
        ?>
        </body>
        </html>