<?php

    //MySQLi Object-Oriented Connect Database (NON-USED PUBLIC FUCTION TEMPLETE)

        $DB_SERVER = 'localhost';
        $DB_USER = 'root';
        $DB_PASS = '';
        $DB_NAME = '';

     //Database Create Connection
            
            mysqli_report(flags: MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $conn = new mysqli(hostname: $DB_SERVER, username: $DB_USER, password: $DB_PASS, database: $DB_NAME);

    //Check Connection

            if ($conn->connect_error) {
            
            die('Connection Failed'. $conn->connect_error);
            }
                  echo 'Connected Successfully';

    switch ($action) {
            case 'insertdata':
            # code...
                 if ($SERVER['REQUEST_METHOD'] == 'POST') {
            # code...
                     $username = $_POST['username'];
                     $firstname = $_POST['firstname'];
                     $lastname = $_POST['lastname'];
                     $email = $_POST['email'];
                     $password = $_POST['password'];
                     $urole = $_POST['urole'];

                         $sql = "INSERT INTO registers (username, firstname, lastname, email, passsword, urole) VALUES(?, ?, ?, ?, ?, ?)";
                              $stmt-$conn->prepare($sql);
                              $stmt->bind_param('ssssss', $username, $firstname, $lastname, $email, $password, $urole);
                                 if ($stmt->execute()) {
                                          # code...
                                        echo 'Data Inserted Succesfully';
                                } else {
                                          # code...
                                        echo 'Error inserting Data :' .$stmt->error;
                                       }
                 }

             case 'query_emp':
                    # code...
                    $stmt = $conn->prepare(query: 'SELECT * FROM employees WHERE firstname = ?');
                    $stmt->bind_param( 's',  $firstname);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        # code...
                    }
                break;
            case 'query_customer':
                # code...
                    $stmt = $conn->prepare(query: 'SELECT * FROM customers WHERE firstname = ?');
                    $stmt->bind_param('s', $firstname);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        # code...
                    }
                break;
        default:
    }
?>