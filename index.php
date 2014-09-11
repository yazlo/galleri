<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <?php
            foreach(glob("thumb/*.jpg") as $filename){
                $temp = strlen($filename) -6;
                $temp = substr($filename,11,$temp);
                $temp = "bild".$temp;
                echo '<div>'."<a href='$temp'><img title='$filename' src='$filename'></a>";
                $tmp = strlen($filename) - 10;
                echo '<p>'.substr($filename,6,$tmp).'</p>'.'</div>';
            }
        ?>
    </body>
</html>
