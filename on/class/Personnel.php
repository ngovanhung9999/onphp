<?php
require_once "./Person.php";

class Personnel extends Person
{

    private $work;

    public function __construct($full_name, $age, $gender, $address, $work, $salary)
    {
        $this->full_name = $full_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->work = $work;
        $this->salary = $salary;
    }

    /**
     *
     * @return mixed
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     *
     * @param mixed $training_industry
     */
    public function setWork($work)
    {
        $this->work = $work;
    }

    public function salary()
    {
        return $this->getSalary()*2;
    }
}
