
<?php
//Static for method
class Hello{
    public static function greeting(){
        echo "Hello static function ";
    }
}
Hello::greeting();
echo "<br>";

static method use self 
 class Hello1{
    public function greeting(){
        echo 'Hello Static function use self';
    }
    public function_construct(){
        self :: greeting();
    }        
 }

 new Hello1();