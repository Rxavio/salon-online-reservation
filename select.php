 <?php
include('connection.php');



        $query = "SELECT * FROM `book` WHERE 

        `date` = '{$date}'
        `month` = '{$month}'
        `year` = '{$year}'
        `hour` = '{$hour}'";

        $result = mysqli_query($conn, $query);



        if ( mysqli_num_rows ( $result ) > 1 )
        {

        echo "data already exists";

        }




        else
        {
        $sql = "INSERT INTO book(firstname, lastname, email,phone, guest, hair, nail, date, month,year,hour)
            VALUES ('$firstname', '$lastname', '$email', '$phone', '$guest', '$hair', '$nail', '$date', '$month', '$year', '$hour')";



        if (mysqli_query($conn, $sql)) {
           echo "New record created successfully";
            } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        mysqli_close($conn);

        }
        ?>