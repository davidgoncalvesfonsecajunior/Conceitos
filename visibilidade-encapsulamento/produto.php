<?php

class Produto{
    private $name;
    private $price;
    private $description;
    private $category;

public function getName()
{
    return $this->name;
}

public function setName($Name)
{
    $Name = $this->name;
}

}

$Produto = new produto();
$Produto->setName("david");
print $produto->getName();