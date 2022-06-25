<?php 

include('logic.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>

<body>

    <div class="kana-container">
        <?php 

        // $data = $_POST['string'];
        // print_r( preg_split('/[\s,]+/' , $_POST['string'] , -1 , 0) );

        // print_r( kana_walker( hiragana() , $character) );

        // echo count(list_maker());
        $number_pushed = 0;
        foreach( list_maker() as $key => $val ){
            ?>
            <div class="kana-col">
                <div class="header-kana"><?php echo $key.'['. count($val) .']'; ?></div>
            
                <div class="kana-body">
                    <?php 
                    foreach( $val as $keyy => $vall ){

                        // echo $keyy .'_'. $vall[0].':'. $vall[1].'<br>';
                        // var_dump($vall);
                        echo $vall[0].'<br>'. $vall[1].'<br><br><br>';
                        // echo $vall[0].':'. $vall[1].'<br><br>';
                        ?>
                        <!-- <div class="kana--kana">
                            <div class="kana--header"></div>
                            <div class="kana--body">
                                <?php echo $vall[2]; ?>
                            </div>
                        </div> -->
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            $number_pushed = count($val) + $number_pushed;
        }
        var_dump($number_pushed);
        ?>            

    </div>
    
</body>
</html> 
