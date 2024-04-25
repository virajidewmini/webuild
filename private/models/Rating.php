<?php 
class Rating extends Model{
    protected $table = "rate";
    
    public function getRating(){

        $query = "select rate.*, user.firstname, user.lastname, user.email from rate inner join user where rate.user_id= user.id ";
		
        return $this->query($query);
    }

    public function getStarRating(){

        $query = "
        SELECT 
            number_of_stars,
            COUNT(*) AS rating_count,
            ROUND((COUNT(*) / (SELECT COUNT(*) FROM rate)) * 100, 2) AS percentage_count
        FROM 
            rate 
        GROUP BY 
            number_of_stars;";

    return $this->query($query);
    }

    public function avgRate(){
        $query="SELECT ((1 * a) + (2 * b) + (3 * c) + (4 * d) + (5 * e)) / R AS overall_rating
        FROM (
            SELECT 
                (SELECT COUNT(*) FROM rate WHERE number_of_stars = 1) AS a,
                (SELECT COUNT(*) FROM rate WHERE number_of_stars = 2) AS b,
                (SELECT COUNT(*) FROM rate WHERE number_of_stars = 3) AS c,
                (SELECT COUNT(*) FROM rate WHERE number_of_stars = 4) AS d,
                (SELECT COUNT(*) FROM rate WHERE number_of_stars = 5) AS e,
                (SELECT COUNT(*) FROM rate) AS R
        ) AS ratings_summary;";

        return $this->query($query);
    }

    public function getCount(){
        $query="select count(id) as count from rate ";
        return $this->query($query);
    }
}
?>