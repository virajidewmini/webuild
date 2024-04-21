<?php 
class Ratings extends Model{

    protected $table="rate";

    
//rate.*,user.first_name,user.last_name
    

   
    public function getRatings(){


        $query="SELECT rate.*,user.firstname,user.lastname FROM rate
        INNER JOIN user
        ON rate.user_id=user.id
        ORDER BY number_of_stars DESC  
        LIMIT 3 ;"; 

        //return $this->query($query);
        
        return $this->query($query);
    }
    
    

    




    

    
    

    
    
    
    
    
    
    
}