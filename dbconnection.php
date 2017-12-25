$con=mysqli_init();
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
mysqli_real_connect($con, 
    "journeystudios-mysqldbserver.mysql.database.azure.com", 
    "mysqldbuser@journeystudios-mysqldbserver",
    p87eYZJ6, journeydb, 3306);
