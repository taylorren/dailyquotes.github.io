<!DOCTYPE html>
<html>
<head>
    <title>Daily Quotes - Daily Inspiration to use as your Startup/Company Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>      
    <section>
        
        <div id="tdiv"><img src="img/openquote.png" alt="Quote"></div>
        
            <div id="tdivcenter">
                
                <?php 
                    $sql_login_host = "sql3.freemysqlhosting.net"; # MySQL Host
                    $sql_login_user = "sql348663"; # MySql UserName
                    $sql_login_pass = "qP8!dL7!"; # MySql Password
                    $sql_login_db = "sql348663"; # MySql Database
                        //conection: 
                        $link = mysqli_connect($sql_login_host,$sql_login_user,$sql_login_pass,$sql_login_db) or die("Error " . mysqli_error($link));
                        
                        $query = "SELECT * FROM quotesDB ORDER BY RAND() LIMIT 1;";
                        
                        $res=mysqli_query($link, $query);
                        $result=mysqli_fetch();
                        
                        $randomquote = mysqli_result($query);
                        echo $randomquote; 
                ?>
                
            </div>
        
        <div id="tdiv"><img src="img/closequote.png" alt="Quote"</div>
            
        </section>
    </body>
</html>
