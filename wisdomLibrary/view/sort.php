<html>
    <head>
<body>
<title>Sorting books </title>
</head>
<body>
<?php
include('.././config/db_conn.php');
    if($con->connect_errno){
        printf("connection fail:%<br/>",$con->connect_error);
      exit();
    }
    printf('connected successfuly.<br>');
    $sql = "SELECT author,title,category FROM book  order by author asc";
    $result = $con->query($sql);
           
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
          printf("author: %s, title: %s, category: %d <br />", 
             $row["author"], 
             $row["category"], 
             $row["title"]);
       }
    } else {
        printf('No record found.<br />');
     }
     mysqli_free_result($result);
     $con->close();
  ?>
</body>
</html>
              


