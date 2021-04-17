<?php
require_once "./Person.php";
class Engineer extends Person
{
    private $training_industry;
    public function __construct($full_name, $age, $gender, $address, $training_industry, $salary)
    {
        $this->full_name = $full_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->training_industry = $training_industry;
        $this->salary = $salary;
    }
    /**
     * @return mixed
     */
    public function getTraining_industry()
    {
        return $this->training_industry;
    }

    /**
     * @param mixed $training_industry
     */
    public function setTraining_industry($training_industry)
    {
        $this->training_industry = $training_industry;
    }
    public function salary()
    {
        return $this->getSalary() * 3;
    }
}
