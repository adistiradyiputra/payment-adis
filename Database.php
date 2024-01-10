<?php

    // Class database connection
    class Database
    {
    
        // Property
        private $host   = "localhost";
        private $uname  = "root";
        private $pass   = "";
        private $db     = "unbinpayment";
        private $connection;

        // Method connection
        function Connect()
        {
            $this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
            return $this->connection;
        }

            // Method untuk mengambil data user berdasarkan ID
        function getUserDataById($id)
        {
            $query = "SELECT * FROM user WHERE id_user = '$id'";
            $result = mysqli_query($this->connection, $query);

            if ($result) {
                return mysqli_fetch_assoc($result);
            } else {
                return false;
            }
        }
    
    } 


?>