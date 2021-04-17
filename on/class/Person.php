<?php
abstract class Person
{

    protected $full_name, $age, $gender, $address, $salary;
    public function __construct($full_name, $age, $gender, $address, $salary)
    {
        $this->full_name = $full_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $full_name
     */
    public function setFull_name($full_name)
    {
        $this->full_name = $full_name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }



    abstract public function salary();
}
