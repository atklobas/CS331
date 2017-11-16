<?php
include_once('Core/Database.php');
class controller{
    private $db;
    function __construct(){
        $this->db=new database();
    }
    private function view($name,$data=NULL){
        include("Core/util.php");
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
}