<?php
class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    
    public function __construct($teamName) {
        $this->teamName = $teamName;
    }

    
    public function finalScore($homeScore, $opponentScore) {
        $this->totalGoals += $homeScore; 
        $this->totalGames += 1; 

        if ($homeScore > $opponentScore) {
            $this->totalPoints += 3; // Win: Add 3 points
        } elseif ($homeScore == $opponentScore) {
            $this->totalPoints += 1; // Draw: Add 1 point
        }
        // Loss: No points added
    }

    
    public function getGoalAverage() {
        if ($this->totalGames === 0) {
            return 0; 
        }
        return $this->totalGoals / $this->totalGames;
    }


    public function getTeamName() {
        return $this->teamName;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }
}
?>
