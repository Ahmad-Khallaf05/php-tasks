<?php
class Student
{
    private $name;
    private $age;
    private $studentID;

    public function __construct($name, $age, $studentID)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $studentID;
    }

    public function __destruct()
    {
        echo "Student object {$this->name} is destroyed.<hr>";
    }

    // Return student details as a string.
    public function getDetails()
    {
        return $this->name . " " . $this->age . " " . $this->studentID;
    }

    // Getters and setters for each property.
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }
    public function getStudentID()
    {
        return $this->studentID;
    }
}

class Classroom
{
    public $students = [];

    public function addStudent($student)
    {
        $this->students[] = $student;
    }

    public function removeStudent($studentID)
    {
        foreach ($this->students as $key => $student) {
            if ($student->getStudentID() == $studentID) {
                unset($this->students[$key]);
            }
        }
    }

    public function getStudents()
    {
        $details = [];
        foreach ($this->students as $student) {
            $details[] = $student->getDetails();
        }
        return $details;
    }
}

$student1 = new Student("Ahmad", 19, 200505986);
$student2 = new Student("Iyad", 17, 200782997);

$classroom1 = new Classroom();

$classroom1->addStudent($student1);
$classroom1->addStudent($student2);

$students = $classroom1->getStudents();

foreach ($students as $studentDetails) {
    echo $studentDetails . "<hr>";
}

?>
