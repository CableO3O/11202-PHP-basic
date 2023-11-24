<?php


class Animal{
    public $name;

    public function setName($name){
        $this->name=$name;
    }

}

//實例化 instant
$animal=new Animal;


echo '顯示名稱:'.$animal->name;
echo '<br>';
$animal->setName('小花');
echo '<br>';
echo '顯示名稱:'.$animal->name;

