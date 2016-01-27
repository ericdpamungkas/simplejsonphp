

<?php
    //open connection to mysql db
    $connection = mysqli_connect("127.0.0.1","root","qweasdzxc","sim_pmb") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from t_akun";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
	
	 $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp)
?>