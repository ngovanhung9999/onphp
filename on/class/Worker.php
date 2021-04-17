<?php
require_once "./Person.php";
class Worker extends Person
{

    private $level;

    public function __construct($full_name, $age, $gender, $address, $level, $salary)
    {
        $this->full_name = $full_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->level = $level;
        $this->salary = $salary;
    }
    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function salary()
    {
        return $this->getSalary() * 1.5;
    }
}
