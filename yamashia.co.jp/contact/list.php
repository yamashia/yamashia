<!DOCTYPE html>
<html>
<body>
                 <?php
                         $dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb';
                         $username = 'sddbMTI5NTE3';
                         $password = '#R1e2p3o4';
                         $options = array(
                         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                          );
  $dbh = new PDO($dsn, $username, $password, $options);

   $sql = 'SELECT*FROM contact WHERE 1';
   $stmt = $dbh->prepare($sql);
   $stmt->execute();
   white(1)
   {
     $rec = $stmt->fetch(PDO::FETCH_ASSOC);
     if($rec==false)
     { break }
     print $rec['name'];
     print $rec['email'];
     print $rec['age'];
     print $rec['category'];
     print $rec['body'];
     print '<br/>';                
   }
   $dbh = null;
            ?>

  </body>
</html>
