<?php

    {
        public $name;
        public $phone;
        public $email;
        
        public function __construct ($name, $phone, $email)
        {
            $this->name=$name;
            $this->phone=$phone;
            $this->email=$email;
        }
    }
    
    class AddressBook
    {
        
    }


    $rafa = new contacs("Rafael","829-692-3070","draco032@gmial.com");
    
    $cont = array($rafa->name, $rafa->phone, $rafa->email);

    foreach ($cont as $v) {
    echo $v,"\n";
    }
    
?>