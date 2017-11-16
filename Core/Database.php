<?php

class database{
    private $con=NULL;
    function __construct(){
        include_once('Core/MysqlLogin.php');
        $this->con=$conn;
    }
    public function  test(){
        cout<<"test";
    }
    public function listAllStudents(){
        return $this->con->query(  "select * from Students join Address on Students.AddressCode = Address.AddressCode;");
    }
    
    public function getStudentInfo($sid){
        mysqli_escape_string($this->con, $sid);
        return $this->con->query("SELECT *
        FROM Students
        JOIN  Address on Students.AddressCode = Address.AddressCode
        WHERE sid = '$sid'");
    }
    
    public function getStudentInfo($sid){
        mysqli_escape_string($this->con, $sid);
        return $this->con->query("SELECT *
        FROM Notes
        WHERE sid = '$sid'");
    }
    
    public function getStudentNotes($sid){
        mysqli_escape_string($this->con, $sid);
        return $this->con->query("SELECT *
        FROM Notes
        WHERE sid = '$sid'");
    }
    
    
    
    /**
     * -- 	Select all info on specific student by SID
SELECT *
FROM Students
JOIN  Address on Students.AddressCode = Address.AddressCode
WHERE sid = '005';
-- 	Select all previous GPA's of specific student by SID
SELECT *
FROM GPA
WHERE SID = '005';
-- 	Select all info on specific student by FirstName and LastName
SELECT *
FROM Students
WHERE FirstName = 'Alex'
AND Lastname = 'Kourkoumelis';

-- 	Select all students on probation
SELECT *
FROM Students
WHERE StatusCode = '002';
-- 	Count number of students on probation
SELECT COUNT(*)
FROM Students 
WHERE StatusCode = '002';
-- 	Select all students on probation with appeal active
	SELECT *
	FROM Students
WHERE StatusCode = '003';
-- 	Count number of students on probation with appeal active
SELECT *
FROM Students
WHERE StatusCode = '003';

-- 	Select all students on probation and probation with appeal active
SELECT COUNT(*)
FROM Students
WHERE StatusCode = '002'
OR StatusCode = '003';
-- 	Select all students who have a GPA < 2.0
SELECT *
FROM Students
JOIN GPA
ON Students.SID = GPA.SID
WHERE GPA < 2.0;
-- 	Select all students who have a GPA >= 2.0
SELECT *
FROM Students
JOIN GPA
ON Students.SID = GPA.SID
WHERE GPA >= 2.0;

-- 	Select all notes and students info on a specific SID number
SELECT *
FROM Notes
JOIN Students
ON Students.SID = Notes.SID
WHERE Students.SID = '005';

-- 	Select all notes and student info on a specific name
SELECT *
FROM Notes
JOIN Students
ON Students.SID = Notes.SID
WHERE Students.FirstName = 'Alex'
AND Students.LastName = 'Kourkoumelis';
-- Count number of students on probation and probation with appeal active
SELECT *
FROM Students
WHERE StatusCode = '002'
OR StatusCode = '003';
-- 	Select all students on probation from a specific High School
Select *
FROM Students
WHERE HSCode = '005';
-- 	Select all info from a specific year
SELECT *
FROM Students
JOIN GPA
ON Students.sid = GPA.sid
WHERE GPA.QtrYear LIKE 'B78_';
     */
//   private $con=$GLOBALS['conn'];
    
}