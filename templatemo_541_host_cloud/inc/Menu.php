<?php
    class Menu{
        public $menu;

        function __construct($menu){
            $this->menu = $menu;
        }
        function get_menu(){
            return $this->menu;
        }
    }
    $Header_menu = new Menu(array("Domov"=>"index.php",
                                  "About Us"=>"about.php",
                                  "Our Services"=>"services.php",
                                  "Contact Us"=>"contact.php",
                                  "Log in/Sign up"=>"login.php"
                        ));
    function print_menu($menu){
        $menu_items = $menu->get_menu();
        foreach($menu_items as $page=>$url){
            echo '<li><a href="'.$url.'">'.$page.'</a></li>';
        }
    }
    
?>