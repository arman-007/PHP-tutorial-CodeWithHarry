
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/ARMAN">CN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/ARMAN">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    echo "<h1> Fetching data from a database. </h1><br>";

    // connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "arman"; //specifying the DB to connect that exact DB

    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Failed to connect!! because " . mysqli_connect_error());
    } else {
        echo "Connection successful!<br>";
    }

    $sql = "SELECT * FROM `phptrip`";
    $result = mysqli_query($conn, $sql);

    //find the numbers of record return
    $num_rows_returned = mysqli_num_rows($result);
    echo $num_rows_returned;
    echo " number of records found in database. <br>";
    echo "<br>";

    //display the rows returned by SQL query
    //using while loop and mysqli_fetch_assoc()
    echo "<h3>Fetching data using while loop and mysqli_fetch_assoc().</h3>";
    if ($num_rows_returned > 0)
    {
        //loop through the associative array to print each row
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['sno'].". Hello, ".$row['name']."! Your destination is ".$row['dest']. ".<br>" ;
        }

        echo "<br>";

        //using foreach loop
        echo "<h3>Fetching data using foreach loop.</h3>";
        foreach($result as $row)
        {
            echo $row['sno'].". Hello, ".$row['name']."! Your destination is ".$row['dest']. ".<br>";
        }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>