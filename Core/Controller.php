<?php

include_once('Core/Database.php');
class controller{
    private $db;
    function __construct(){
        $this->db=new database();
    }
    private function view($name,$data=NULL){
        
        if(is_array($data)){
            foreach($data as $key=>$value){
                $$key=$value;
            }
        }
        include("Views/{$name}.php");
    }
    
    public function index(){
        $this->view('index');
    }
    public function ListAllStudents(){
        $data=$this->db->listAllStudents();
        $this->view('ListAllStudents',array('results'=>$data));
    }
    public function StudentInfo(){
        $this->view('StudentInfo');
    }
    public function StudentInfoLastName(){
        $this->view('StudentInfoLastName');
    }
}