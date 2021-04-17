<?php
class MyClass
{
    private $firstField;
    private $secondField;
    private $thirdField;

    public function __get($name)
    {
        if (method_exists($this, $method = ('get' . ucfirst($name))))
            return $this->$method();
        else
            throw new Exception('Can\'t get property ' . $name);
    }

    public function __set($name, $value)
    {
        if (method_exists($this, $method = ('set' . ucfirst($name))))
            return $this->$method($value);
        else
            throw new Exception('Can\'t set property ' . $name);
    }

    public function __isset($name)
    {
        return method_exists($this, 'get' . ucfirst($name))
            || method_exists($this, 'set' . ucfirst($name));
    }

    public function getFirstField()
    {
        return $this->firstField;
    }

    protected function setFirstField($x)
    {
        $this->firstField = $x;
    }

    private function getSecondField()
    {
        return $this->secondField;
    }
}

$obj = new MyClass();

echo $obj->firstField; // works
$obj->firstField = 'value'; // works

echo $obj->getFirstField(); // works
$obj->setFirstField('value'); // not works, method is protected

echo $obj->secondField; // works
echo $obj->getSecondField(); // not works, method is private

$obj->secondField = 'value'; // not works, setter not exists

echo $obj->thirdField; // not works, property not exists

isset($obj->firstField); // returns true
isset($obj->secondField); // returns true
isset($obj->thirdField); // returns false