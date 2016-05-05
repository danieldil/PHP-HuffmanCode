<html>
    <head>
        <?php  
        
        $actual;
        $myfile = fopen("k.txt", "r") or die("Unable to open file!");
        $W = fread($myfile,filesize("k.txt"));
        echo $W;
        $arr1 = str_split($W);
        //print_r($arr1);
        //populate array with zeros
        for($i = 0; $i < sizeof($arr1); $i++){
            $actual[$W[$i]] = 0;
        }
        print_r($actual);
        
        
        
        
        
        
        
        fclose($myfile);
        ?>
    </head>







</html>