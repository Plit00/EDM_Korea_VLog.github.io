<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <?php
      $conn= mysqli_connect('10.100.111.193', 'ccit', 'list!2#', 'CVE_LIST');
      $sql="SELECT * FROM ad";
      $result=mysqli_query($conn,$sql);
    ?>
  </head>
  <body>
   <?php
      while($board = mysqli_fetch_array($result)){
        echo $board['cve_num']. ;
        echo $board['description'].;
        echo $board['cve_link'].;
        echo $board['adcol'].;
      }
    ?>
  </body>
</html>
