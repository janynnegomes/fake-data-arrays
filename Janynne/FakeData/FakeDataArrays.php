<?php

namespace Janynne\FakeData;

/**
 * Description of FakeDataArrays
 *
 * @author janynne
 */
class FakeDataArrays {

    private  $firstNames = array(
        'Joel',
        'Janynne',
        'Steve',
        'Davi',
        'Robson',
        'Orozilda',
        'Dida',
        'Karyne',
        'Hendell',
        'Thiago',
        'Cezamar',
        'Celmar',
        'José',
        'João',
        'Maria',
        'Mariana',
        'Luiza',
        'Luzia',
        'Lana',
        'Laura',
        'Luana');
    
    private $lastNames = array(
        'Gomes',
        'Souza',
        'Ferreira',
        'Fernandes',
        'Silva',
        'Ferraz',
        'Santos'        ,
        'Pereira',
        'Soares',
        'Santos'
        );
    
    
    private function mountName(){
        return $this->firstNames[rand(0, sizeof($this->firstNames)-1)]." ".$this->lastNames[rand(0, sizeof($this->lastNames)-1)];
    }
    
    
    public static function getPerson($count){
        
        $people = array();
        
        for($cont=0; $cont < $count; $cont++){            
            
            $name = $this->mountName();
            $person = array("id"=>$cont,
                            "name"=> $name,
                            "email"=> trim(preg_replace('/\s+/', '-', strtolower($name))). "@fakemail.com");
            array_push($people, $person);
        }
        
        return $people;
    }

}
