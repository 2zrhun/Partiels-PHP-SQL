<?php
class Guerrier {
    public $name='cristaline';
    public $niveau=1;
    public $age=26;
    public $force=100;
    public $arme='hache';
    
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this ->name;
    }
    function set_niveau($niveau){
        $this->niveau=$niveau;
    }
    function get_niveau(){
        return $this ->niveau;
    }
    function set_force($force){
        $this->force=$force;
    }
    function get_force(){
        return $this ->force;
    }
    function set_arme($arme){
        $this->arme=$arme;
    }
    function get_arme(){
        return $this ->arme;
    }


    function levelUP(){
        if(levelUP()){
            $niveau1=$niveau + 1;
            $force1= $force + 50;
            $niveau = new $niveauUp;
            $force = new $forceUp;
        }

    }

    function AttaqueCoupDeHache($attack){
        if(AttaqueCoupDeHache()){
            echo'attack de hache mouahaha';
            $attack=$force*1.5;
            if($attack < 150){
                echo'Attaque raté..!';
            }else{
                echo'Attaque pas raté.!';
            }            
        }
    }

    


}

