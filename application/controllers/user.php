<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user extends CI_Controller {
    
    public function loadLanguage(){
        $this->load->helper('language');
        if($_SESSION['language'] == "Nederlands")
        {
            $this->lang->load('NL', 'nederlands');
        }
        else if($_SESSION['language'] == "English")
        {
            $this->lang->load('EN', 'english');
        }
    }
     
    //gets all the residents from given roomnumber and goes to the 'press on your picture' page
    //session: array with all residentID and pictures from that roomnumber
    public function login(){        
        $this->load->model('SQLManager');
        
        $username = $_POST["username"];                        //TODO check if post is not empty
        $password = $_POST["password"];
        
        
        
        $user_info = $this->SQLManager->login($username, $password);
        
        $this->loadLanguage();
        
        if(sizeof($user_info)==0)
        {
            //$_SESSION['room_number'] = '-2';
            $this->load->view('login');
        }else{
//            $_SESSION['room_info'] = $room_info;
//            $_SESSION['room_number'] = $room_number;
            $this->load->view('home');  
        }
       
    }
    
    
    //session: residentID from current logged-on resident
    public function getAllResidentData(){
        $id = $_POST["id"];
        $_SESSION['id'] = $id;
    }
    
    //loads info from current logged-on resident
    public function loadResidentInfo(){
        
        $this->load->model('SQLManager'); 
        $this->SQLManager->get_residentInfo($_SESSION['id']);
        $this->loadLanguage();
        $this->load->view('welcome');
    }
    
    //load page
    public function welcome(){
        $this->loadLanguage();
        $this->load->view('welcome');
    }
    
    //load page
    public function category(){
        $this->load->model('SQLManager'); 
        $_SESSION['answerable'] = $this->SQLManager->checkAnswerable($_SESSION['id']);
        $this->loadLanguage();
        $this->load->view('categories');  
    }
    
    //session: category from current questionnaire
    public function chooseCategory(){
        $_SESSION['category'] = $_POST["cat"];
        //echo "<script>console.log( 'Debug Objects: " . $_SESSION['category'] . "' );</script>";
        
    }
    
    public function profile(){
        $this->loadLanguage();
        $this->load->view('profile');
    }
    
    //session: array from Q's from selected questionnaire
    //session: question, ID, category from first question
    public function question(){ 
        $this->loadLanguage();
        $this->load->model('SQLManager');
        $_SESSION['qID'] = '0';
        $qid = (int)$_SESSION['qID'];
        
        $_SESSION['answerValue'] = null;
        
        if($_SESSION['category'] != "Alle vragen"){
            $questionArray = $this->SQLManager->get_questions($_SESSION['category']);
            //echo "not all Qs"; //for test
        } else {
            $questionArray = $this->SQLManager->get_all_questions();
            $_SESSION['category'] = 'Privacy';
            //echo "all Qs"; //for test
        }
        
        $_SESSION['qestionIDs'] = $questionArray; 
        $_SESSION['questionarray'] = $questionArray;
       
        $_SESSION['allanswers'] = array();      //used for show all answers
      //  echo 'answers is created fine'; //for test show all answers
        
        
        $_SESSION['questionCurrentDBID'] = $questionArray [$qid][0];
        $_SESSION['questionTest'] = $questionArray[$qid][1];
        $_SESSION['questionCategory'] = $questionArray [$qid][2];
        
        $this->load->view('question');  
        
    }
    
    //session: question, ID, category for the next question
    public function nextQuestion(){
        $this->loadLanguage();
        $qid = (int)$_SESSION['qID'];
        $newqid = ++$qid;
        $_SESSION['qID'] = $newqid;
        $_SESSION['answerValue'] = null;
        if($newqid >= $_SESSION['arraylength']){
            $this->showAnswersView();
        } else {            
            $_SESSION['category'] = $_SESSION['questionarray'][$newqid][2];
            $_SESSION['questionTest'] = $_SESSION['questionarray'][$qid][1];
            
            $this->load->view('question');
        }
    }
    
    public function showAnswersView()
    {
        $this->loadLanguage();
        $this->load->view('showanswers');
    }
    
    //session: add answervalue from selected smiley
    public function receiveAnswer(){
        $answer = $_POST["score"];              //TODO check if empty
        //echo "score:  $answer";
        $_SESSION['allanswers'][$_SESSION['qID']] = $answer;
    }
    
    //session: add answervalue to array allanswers
    public function addAnswer(){
        $this->loadLanguage();
        if($_SESSION['allanswers'][$_SESSION['qID']] == null){
            $this->load->view('question');
        } else {
            $this->nextQuestion();
        }
    }
    
    //post all the answers of the current questionnaire in the database
    public function addAnswers() {
        //$this->loadLanguage();
        $this->load->model('SQLManager'); 
        for($i=0; $i<sizeof($_SESSION['allanswers']); $i++){
            $this->SQLManager->add_answer($_SESSION['allanswers'][$i], $_SESSION['qestionIDs'][$i][0], $_SESSION['id']);
        }
        //$this->load->view('welcome');
    }
    
    public function addAnswersAnonimously() {
        //$this->loadLanguage();
        $this->load->model('SQLManager'); 
        for($i=0; $i<sizeof($_SESSION['allanswers']); $i++){
            $this->SQLManager->add_answer($_SESSION['allanswers'][$i], $_SESSION['qestionIDs'][$i][0], 1);
        }
        //$this->load->view('welcome');
    }

    //load page
    public function pictures(){
        $this->loadLanguage();
        $this->load->model('SQLManager');
        $_SESSION['activities'] = $this->SQLManager->getActivities();
        $_SESSION['pictures'] = $this->SQLManager->getPictures($_SESSION['activities'][0][0]);
        $this->pictureView();
    }
    
    public function pictureView(){
        $this->loadLanguage();
        $this->load->view('pictures');
    }
    
    public function picturesForCategory(){
        $activityID = $_POST["activityID"];
        echo $activityID;
        $this->load->model('SQLManager');
        $_SESSION['pictures'] = $this->SQLManager->getPictures($activityID);
        
    }
    
    //session: add new answervalue from selected smiley
    public function changeanswer(){
        $qid = $_POST["id"];
        $_SESSION['qID'] =  $qid;
        $_SESSION['category'] = $_SESSION['questionarray'][$qid][2];
        $_SESSION['questionTest'] = $_SESSION['questionarray'][$qid][1];
        
         
    }
    public function ChangeAnswerView()
    {
        $this->loadLanguage();
        $this->load->view('changeAnswer'); 
    }
    
}

