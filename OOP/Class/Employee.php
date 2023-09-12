<?php
class Employee {
        // Properties
        public $_id;
        public $_name;
        public $_age;
        public $_gender;

         // Methods
        function __construct($id) {
            $this->_id = $id;
        }
        function display_data(){
            echo "<p>Name : $this->_name<br>Age : $this->_age<br>Gender : $this->_gender<p>";
        }
        function set_name($name){
            $this->_name = $name;
        }
        function set_age($age){
            $this->_age = $age;
        }
        function set_gender($gender){
            $this->_gender = $gender;
        }
        function get_name(){
            return $this->_name;
        }
        function get_age(){
            return $this->_age;
        }
        function get_gender(){
            return $this->_gender;
        }
    }
    class PartTimeEmployee extends Employee {
        public $_hourlysalary;
        
        function set_salary($salary){
            $this->_hourlysalary = $salary;
        }
        
        function get_salary(){
            return $this->_hourlysalary;
        }
        function display_data(){
            echo "<p>Name : $this->_name<br>Age : $this->_age<br>Gender : $this->_gender<br>Salary : $this->_hourlysalary<p>";
        }
    }
    class FullTimeEmployee extends Employee {
        public $_monthlysalary;
        
        function set_salary($salary){
            $this->_monthlysalary = $salary;
        }
        
        function get_salary(){
            return $this->_monthlysalary;
        }
        function display_data(){
            echo "<p>Name : $this->_name<br>Age : $this->_age<br>Gender : $this->_gender<br>Salary : $this->_monthlysalary<p>";
        }
    }
