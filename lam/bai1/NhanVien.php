<?php
class NhanVien{
    private $name;
    private $address;
    private $email;
    private $phone;
    private $degree;

    public function add($name, $address, $email, $phone, $degree){
        $this->name = $name ;
        $this->address = $address;
        $this->email = $email;
        $this->phone= $phone;
        $this->degree= $degree;
    }
    public function view(){
        echo "Name: $this->name <br>";

        echo "Name: $this->address <br>";

        echo "Name: $this->email <br>";

        echo "Name: $this->phone <br>";

        echo "Name: $this->degree <br>";


    }
   

}
