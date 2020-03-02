<!-- Vishwa Wani 8622587 -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('mysqli_connect.php');
           
            // Storing data in variables
            $fname = $lname = $payment = '';
            $fname = $_POST['fname']; 
            $lname = $_POST['lname'];
            $payment = $_POST['payment'];
    
            // checking if the field is empty or not
            if(empty($fname)){ 
                $err[] = "Please enter First Name"; 
            }
            // checking if the field is empty or not
            if(empty($lname)){ 
                $err[] = "Please enter Last Name"; 
            }
    
            // if everthing is filled
            if(empty($err)){
                // to store the id of the book 
                $_SESSION['bID']=$id;

                // query for inserting data in a database
                $sql = "INSERT INTO borders (bID, FirstName, LastName, MethodOfPayment) VALUES ($id, '$fname', '$lname', '$payment')";
    
                if ($dbc->query($sql) === TRUE) {
                    echo 'Your order has been confirmed';
                }else{
                    echo "Error: " . $sql . "<br>" ;
                }

                // for updating the quantity of the books
                $sql1 = "SELECT bID, Quantity FROM books WHERE bID = $id";
                $result = $dbc->query($sql1);
                $row = $result->fetch_assoc();
                $quantity = intval($row['Quantity'])-1;
                
                // for setting the quantity in the books table
                $u ="UPDATE books SET Quantity = '$quantity' WHERE books.bID = '$id'";
                $dbc->query($u);
            }
    }
?>