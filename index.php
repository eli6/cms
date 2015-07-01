<html>
<head>
  <title>BLOG</title>
</head>
<body>
<div id="header">
    <div id="headerText">
    MySQL blog
    </div>
</div>

<div id="container">

  <?php

    include('connect.php');
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>";

    echo "<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>";
    mysqli_set_charset($connect, "utf8");

    $sql = "SELECT id, date, title, text FROM content " ;
    $result = $connect->query($sql);

    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        
        //div id is the box that will output the id
       /* echo "<div id='id'>";
        echo $row["id"]; 
        echo "</div>";
        //end of div id */
        
         //div title is the box that will output the title
        echo "<div id='title'>";
        echo $row["title"]; 
        echo "</div>";
        //end of div id
        
        //div date is the box that will output the date
        echo "<div id='date'>";
        echo $row["date"]; 
        echo "</div>";
        //end of div id
        
        //div text is the box that will output the text
        echo "<div id='text'>";
        echo $row["text"]; 
        echo "</div>";
        //end of div id
    }
    
} else {
    echo "0 results";
}


$connect->close();

?>
</body>  
</div>
