<!-- Vishwa Wani 8622587 -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Book List Page</title>
    <style>
        #user {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 0px;
        }
        #user td, #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #user tr:nth-child(even){
            background-color: #f2f2f2;
        }
        #user tr:hover {
            background-color: #ddd;
        }
        #user th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <?php

    // file requirement
    require('header.php');
    require('mysqli_connect.php');
    
    session_start();
    
    // query for inserting data in the database
    $sql = "SELECT bID, bookName, bookPrice, bookImage, Quantity FROM `books`";
    $result = $dbc->query($sql);

    echo '<h1 style="text-align:center"> Here is our book list</h1>';
    echo "<table id='user'>";

    // store the data in the table
    echo "<tr><th> Book Name </th><th> Price </th><th> Book Images </th><th> Check Out </th></tr>";

    if ($result->num_rows > 0) {
    // Data of each row in a table
        while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["bookName"]. "</td><td>" . $row["bookPrice"] . " </td><td><img src= 'images/".$row["bookImage"]."
            'width='150' height='150'></img></td> 
            <td> <a href = 'checkout.php?ID=".$row["bID"]."'>"."<button>Buy Now</button>"."</a></td></tr>";
        }
    } else {
    echo 'No books found!!';
    }
    ?>
</body>
</html>