<?php

class SQLManager extends CI_Model{
    
    //GET residentinfo from DB
    //Given roomNumber
    //Return array with residentID and picture
    public function get_room($room_number){
        $sql = "SELECT residentID, firstName, language, picture FROM Resident WHERE roomNumber = '$room_number'";
        $result_array = $this->db->query($sql)->result_array();
        
        $residents = array();
        
        $x = 0;
        
         
        foreach ($result_array as $row){
            
            $residentID = $row['residentID'];
            $picture = $row['picture'];
            $firstName = $row['firstName'];
            
            $residents[$x++] = array($residentID, $picture, $firstName);
              
            if($x == 0)
            {
                $_SESSION['language'] = $row['language'];
            }
        }
        return $residents;
    }
    
    //GET residentinfo from DB
    //Given residentID
    //Return session-variables for firstName, lastName, floor, pictureSmall and language
    public function get_residentInfo($id){
        $sql = "SELECT firstName, lastName, floor, pictureSmall, language FROM Resident WHERE residentID = '$id'";
        $result_array = $this->db->query($sql)->result_array();
        if($result_array >1)
        {
            foreach ($result_array as $row){
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['floor'] = $row['floor'];
                $_SESSION['pictureSmall'] = $row['pictureSmall'];
                $_SESSION['language'] = $row['language'];
            }
        }
    }
    
    //GET questions from DB
    //Given category
    //Return array with questionID, question and category
    //Return session-variables for number of questions
    public function get_questions($cat){
        if($_SESSION['language'] == "Nederlands")
        {
             $sql = "SELECT questionID, questionDutch, categoryDutch FROM Question INNER JOIN Category ON Category_categoryID = categoryID WHERE categoryDutch = '$cat'";
        }
        else
        {
            $sql = "SELECT questionID, questionEnglish, categoryEnglish FROM Question INNER JOIN Category ON Category_categoryID = categoryID WHERE categoryDutch = '$cat'";
        }
       $result_array = $this->db->query($sql)->result_array();
        $questions = array();
        $x = 0;
        foreach ($result_array as $row){
                  
            
            $questionID = $row['questionID'];
            if($_SESSION['language'] == "Nederlands")
            {
                $question = $row['questionDutch'];
                $category = $row['categoryDutch'];
            }
            else
            {
                $question = $row['questionEnglish'];
                $category = $row['categoryEnglish'];
            }
            
            $questions[$x++] = array($questionID, $question, $category);
        }
        $_SESSION['arraylength'] = $x;
        //echo $_SESSION['arraylength']; //can be used to indicate how much Questions there are!
        return $questions;
    }
    
    //POST answer in DB
    public function add_answer($value, $qID, $rID) {
        $sql = "INSERT INTO Answer (answer, Question_questionID, Resident_residentID)
        VALUES ($value, $qID, $rID)";

        if ($this->db->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }

    //GET questions from DB
    //Return array with questionID, question and category
    //Return session-variables for number of questions
    public function get_all_questions() {
        if($_SESSION['language'] == "Nederlands")
        {
             $sql = "SELECT questionID, questionDutch, categoryDutch FROM Question INNER JOIN Category ON Category_categoryID = categoryID";
        }
        else
        {
            $sql = "SELECT questionID, questionEnglish, categoryEnglish FROM Question INNER JOIN Category ON Category_categoryID = categoryID";
        }
        $result_array = $this->db->query($sql)->result_array();
        $questions = array();
        $x = 0;
        foreach ($result_array as $row){
            if($_SESSION['language'] == "Nederlands")
            {
                $question = $row['questionDutch'];
                $category = $row['categoryDutch'];
            }      
            else
            {
                $question = $row['questionEnglish'];
                $category = $row['categoryEnglish'];
            }
            
            $questionID = $row['questionID'];
            
            $questions[$x++] = array($questionID, $question, $category);
        }
        $_SESSION['arraylength'] = $x;
        //echo $_SESSION['arraylength'];
        return $questions;
    }
    
    public function getActivities(){
        $sql = "SELECT * FROM a17_webapps10.Activities order by  activityDate DESC";
        $result_array = $this->db->query($sql)->result_array();
        $activities = array();
        $x = 0;
        foreach ($result_array as $row){
            $activityID = $row['activityID'];
            $activityName = $row['activityName'];
            
            $activities[$x++] = array($activityID, $activityName);
        }
        return $activities;
    }
    
    public function getPictures($activity){
        $sql = "SELECT picturePath FROM a17_webapps10.pictures where activityID=$activity;";
        $result_array = $this->db->query($sql)->result_array();
        $pictures = array();
        $x = 0;
        foreach ($result_array as $row){
            $pictures[$x++] = $row['picturePath'];
        }
        return $pictures;
    }
    
    public function checkAnswerable($id){
        $answerable = array();
        date_default_timezone_set('Europe/Brussels');
        for ($i=1; $i<=15; $i++){
            echo "<script>console.log( '$i' );</script>";
            $sql = "SELECT dateOfAnswer from Question inner join Answer on Question.questionID = Answer.Question_questionID
                        where Answer.Resident_residentID = $id  
                        and Category_categoryID = $i
                        order by Answer.dateOfAnswer desc Limit 1";
            
            $result_array = $this->db->query($sql)->result_array();
            $answerable[$i] = TRUE;
            foreach ($result_array as $row){
                $timeString = $row['dateOfAnswer'];
                $time = strtotime($timeString);
                $currentTime = time();
                echo "<script>console.log( '$currentTime' );</script>";
                echo "<script>console.log( '$time' );</script>";
                $diff = $currentTime - $time;
                echo "<script>console.log( '$diff' );</script>";
                if(($currentTime - $time) < 86400){
                    $answerable[$i] = FALSE;
                    
                    echo "<script>console.log( '$i: true' );</script>";
                    
                }
            }
            
            
        }
        return $answerable;
    }
}

