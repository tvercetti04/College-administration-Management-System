<?php 

session_start();

    class Work{

        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "cams";

        private $connect;

        public function __construct(){
            $this->connect = new mysqli($this->host, $this->username, $this->password, $this->database);

            if(mysqli_connect_error()){
                trigger_error("Databse Connection Failed".mysqli_connect_error());
            }
            else{
                return $this->connect;
            }
        }

        public function redirect($page){
            echo "<script>window.open('$page.php','_self')</script>";
        }

        public function insert($table,$fields){
            $col = implode(",",array_keys($fields));
            $rows = implode("','",array_values($fields));

            $sql = $this->connect->query("INSERT INTO $table($col) VALUE('$rows')");

            if($sql){
                $_SESSION['alert'] = "Data Inserted Successfully";
                // $this->redirect($page);
            }
            else{
                echo "Failed";
            }
        }

      

        public function select($query){
            $run = $this->connect->query($query);

            $array = [];

            if($run->num_rows > 0){
                while($row = $run->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }
            else{
                echo "No records found";
                return $array;
            }
        }
        public function update($table,$fields,$cond){
            $sql = $this->connect->query("Update $table SET $fields where $cond");
            return ($sql)?true:false;
        
        }

        public function countData($query){

            $run = $this->connect->query($query);
            return $run->num_rows;
        }
    
    }


    $cams = new Work();

?>