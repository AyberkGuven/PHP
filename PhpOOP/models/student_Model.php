<?php
    class Students{
        private $Id;
        private $Name;
        private $surName;

        public function set_Id($Id){
            $this->Id = $Id;
        }

        public function get_Id(){
            return $this->Id;
        }

        public function set_Name($Name){
            $this->Name = $Name;
        }

        public function get_Name(){
            return $this->Name;
        }

        public function set_surName($surName){
            $this->surName = $surName;
        }

        public function get_surName(){
            return $this->surName;
        }
    }
?>