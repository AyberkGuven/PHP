<?php    
    class Services
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "PhpOOP_9061";
        private $conn;

        public function get_Data(){
            $this->open_Connect();

            $sql = "SELECT *  FROM Students";
            $result = $this->conn->query($sql);

            $this->close_Connect();
            return $result;
        }

        public function Create(){
            // Formdan geldi.
            // echo "".$_POST["name"]." ". $_POST["surname"]."" ;

            $Name = $_POST["name"];
            $surName = $_POST["surname"];

            require 'models/student_Model.php';
            $Student = new Students();

            $Student->set_Name($Name);
            $Student->set_surName($surName);
            
            echo $Student->get_Name();
            echo " ";
            echo $Student->get_surName();

            // return $Student;
        }

        public function Update(){
            echo "Merhaba Hoşgeldiniz";
        }

        public function Delete(){
            echo "Merhaba Hoşgeldiniz";
        }

        private function open_Connect(){
            $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
            $this->conn -> set_charset("utf8");
            // Check connection

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        private function close_Connect(){
            $this->conn->close();
        }



        // private $servername = "localhost";
        // private $username = "root";
        // private $password = "";
        // private $dbname = "PhpOOP_9061";
        // private $conn;

        // public function __Construct(){
        //     $conn($this->servername, $this->username, $this->password, $this->dbname);
        // }
        
        // public static function Index(){

        //     // $this->__Construct();

        //     if ($this->$conn->connect_error) {
        //         die("Connection Failed: " . $conn->connect_error);
        //     }

        //     $sql = "SELECT * FROM";
        //     $result = $conn->query($sql);

        //     if ($result->num_rows > 0) {
        //         echo "<table class='table table-hover'><thead><tr><th>Adı</th><th>Soyadı</th><th></th></tr></thead><tbody>";
        //         while ($row = $result->assoc()) {
        //             echo "
        //             <tr>
        //                 <td>". $row["Name"] ."</td>
        //                 <td>". $row["SurName"] ."</td>
        //                 <td>
        //                     <button type='submit' class='btn btn-success'>Güncelle</button>
        //                     <button type='submit' class='btn btn-danger'>Sil</button>
        //                 </td>
        //             </tr>";
        //         }
        //         echo "</tbody></table>";
        //     }else {
        //         echo "0 results";
        //     }
        // }

        // public function Create(){
        //     echo "Merhaba Hoşgeldiniz";
        // }

        // public function Update(){
        //     echo "Merhaba Hoşgeldiniz";
        // }

        // public function Delete(){
        //     echo "Merhaba Hoşgeldiniz";
        // }
    }
?>