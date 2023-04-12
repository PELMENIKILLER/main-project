<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        define("HOST","localhost");
        define("USER","root");
        define("PASSWORD","root");
        define("DB","school");

        $connect = new mysqli(HOST, USER, PASSWORD, DB);
        if ($connect->connect_error){
            exit("Ошибка подключения к базе данных".$connect->connect_error);
        }

        $connect->set_charset("utf8");

        $sql = "SELECT * FROM `students`";

        $result = $connect->query($sql);

        While ($row = $result->fetch_assoc()){
            echo "<div>
                $row[lname], $row[fname], $row[gender], $row[age]
            </div>";
        }


    ?>
</body>
</html>