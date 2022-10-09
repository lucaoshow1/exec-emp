<?php

class Empregado
{
    protected string $name;
    protected string $lastname;
    protected float $salary;


    public function __construct(string $name, string $lastname, float $salary)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->salary = $salary;
    }

    public function getName(): string { return $this->name; }

    public function getLastname(): string { return $this->lastname; }

    public function getSalary(): float{ return $this->salary; }

    public function __toString(): string
    {
        return " Nome: {$this->name}\n Sobrenome: {$this->lastname} \n Salário Mensal: R$ {$this->salary}";
    }

    public  function returnSalary():float
    {
        echo "Seu salário anual é no valor de: R$ ";
        return  $this->getSalary() * 12;
    }

    public function returnBonus(): float
    {
        echo "Após um ano, você receberá 10% de bonus e seu salário passará a ser: R$ ";
        return $this->salary += $this->salary * 0.10;
    }


}