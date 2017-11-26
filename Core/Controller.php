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

    public function ListFckups(){
        $data=$this->db->listFailing();
        
        
        $this->view('ListFckups',array('theList'=>$data,'test'=>"hello world"));
    }   
    public function StudentInfo(){
        $sid=$_GET['sid'];
        $data=array();
        if(!empty($sid)){
            $data['student']=$this->db->getStudentInfo($sid);
            $data['appeals']=$this->db->getStudentAppeals($sid);
            $data['notes']=$this->db->getStudentNotes($sid);
        }
        $this->view('StudentInfo',$data);
    }
    public function StudentInfoLastName(){
        $this->view('StudentInfoLastName');
    }
    public function Upload(){
        $this->view('Upload');
    }
}