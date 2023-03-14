<?php

    class Count
    {
        private $con;
        public function __construct()  
        {
            $dbhost = "localhost"; 
            $dbuser = "root";
            $dbpass = "";
            $dbname = "hr";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 

            if(!$this->conn)
            {
                die("Database Connection Error!");  
            }
        }
        //.......................................................................................................
        //Total Employee
        function empolyee_count()
        {
            $query="SELECT COUNT(*) AS count FROM empolyee";
            $value= mysqli_query($this->conn, $query); 
            $row = mysqli_fetch_assoc($value);
            $number=$row['count'];
            return $number;
        }
    }
?>