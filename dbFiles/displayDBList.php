<!DOCTYPE html>
<head>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

 <div id="wrapper">	
 
 <h3>Books</h3>


<?php


$link = mysqli_connect("localhost", "fruit", "vegetables", "api_test");


$sql = "SELECT id, title, summary FROM books";

if ($result = mysqli_query($link,$sql)) {
    
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["id"]. ".   " .$row["title"]. "  " . $row["summary"]. "</p>";
    }

} else {

    echo "No books";

}

}

?>
 
</div><!-- // wrapper -->

</body>
</html>