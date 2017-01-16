<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class total{
            var $type;
            var $name;
            var $color;
            var $going;
            var $food;
        
            public function __construct($type,$name,$color,$going,$food) {
                $this->type = $type;
                $this->name = $name;
                $this->color = $color;
                $this->going = $going;
                $this->food = $food;
            }                      
        }
        class person extends total{
            public function __construct($type, $name, $color, $going, $food) {
                parent::__construct($type, $name, $color, $going, $food);
            }
            function running(){
                echo ("Nguoi ".$this->type." co ten la ".$this->name." co mau da ".$this->color." dang ".$this->going."<br/>");
                echo ("-----------");
            }
            function eating(){
                echo ("Nguoi ".$this->type." co ten la ".$this->name." co mau da ".$this->color." dang an ".$this->food."<br/>");
                echo ("-----------");              
            }
        }
        
        class animals extends total{
            public function __construct($type, $name, $color, $going, $food) {
                parent::__construct($type, $name, $color, $going, $food);
            }
            function running(){
                echo ("Dong vat ".$this->type." ten la ".$this->name." co mau da ".$this->color." dang ".$this->going."<br/>");
                echo ("-----------<br/>");
            }
            function eating(){
                echo ("Dong vat ".$this->type." ten la ".$this->name." co mau da ".$this->color." dang an ".$this->food."<br/>");
                echo ("-----------<br/>");              
            }
        }
        
        class child extends person{
            public function __construct($type, $name, $color, $going, $food) {
                parent::__construct($type, $name, $color, $going, $food);
            }           
        }
        
     
        $long = new child('Cao', 'Long', 'Den', 'chay', '');
        $long->running();
        
        $huy = new person('Cao', 'huy', 'trang', 'nhay', 'thit');
        $huy->eating();
        ?>
    </body>
</html>
