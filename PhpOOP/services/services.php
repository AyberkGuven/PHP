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

            $sql = "SELECT * FROM Students";
            $result = $this->conn->query($sql);

            $this->close_Connect();

            return $result;
        }

        public function Create(){
            // Formdan geldi.
            // echo $_POST["name"];
            // echo $_POST["surname"];

            // student model geldi.
            // echo $Student->get_Name();
            // echo " ";
            // echo $Student->get_surName();

            $this->open_Connect();

            $Name = $_POST["name"];
            $surName = $_POST["surname"];

            require 'models/student_Model.php';
            $Student = new Students();

            $Student->set_Name($Name);
            $Student->set_surName($surName);
            
            $sql = "INSERT INTO students (Name, surName) VALUES ('$Name', '$surName')";
            
            if ($this->conn->query($sql) === TRUE) {
                echo "<script>alert('New record created successfully');</script>";
            }else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
            }

            $this->close_Connect();

            header("location:index.php");
        }

        public function get_UpdateData(){
            $this->open_Connect();

            $sql = "SELECT * FROM students WHERE Id=". $_GET["id"] ." ";
            $result = $this->conn->query($sql);

            $this->close_Connect();

            return $result;
        }

        public function Update(){
            $this->open_Connect();

            $updateId = $_POST["SID"];
            $Name = $_POST["name"];
            $surName = $_POST["surname"];

            require 'models/student_Model.php';
            $Student = new Students();

            $Student->set_Name($Name);
            $Student->set_surName($surName);

            $sqlUpdate = "UPDATE students SET Name = '$Name', SurName = '$surName' WHERE Id=$updateId ";

            if ($this->conn->query($sqlUpdate) === TRUE) {
                echo "<script>alert('Güncelleme Başarılı');</script>";
            }else {
                echo "<script>alert('Güncelleme Başarısız');</script>";
            }

            $this->close_Connect();

            header("location:index.php");
        }

        public function Delete(){
            $this->open_Connect();
            
            $DeleteId = $_GET["id"];

            $sql = "DELETE FROM students WHERE Id=$DeleteId";

            if ($this->conn->query($sql) === TRUE) {
                
            }else {
                echo "<script>alert('Silinmedi');</script>". $this->conn->error;
            }

            $this->close_Connect();
            
            header("location:index.php");
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