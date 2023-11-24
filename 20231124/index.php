<?php


class Animal{
    protected $name;

    // 在被實例化後就先執行
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

}

//實例化 instant
// 使用__constructr建立函式參數就要先在實例化的地方將參數打上
// $animal=new Animal('阿明');


// echo '顯示名稱:'.$animal->getName();
// echo '<br>';
// $animal->setName('小花');
// echo '顯示名稱:'.$animal->getname();
// $animal->name='阿忠';
// echo '<br>';
// echo '顯示名稱:'.$animal->name;


// 類別Dog繼承類別Animal(Dog可以使用Animal的功能並擴充)
class Dog extends Animal{
     
    function sit(){
        echo $this->name;
        echo "坐下";
    }
}

$dog=new Dog("一毛二");

echo $dog->getname();
echo "<br>";
echo $dog->setname("二毛四");
echo $dog->getname();
$dog->sit();