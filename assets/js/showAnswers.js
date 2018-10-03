var modal = document.getElementById('myModal');
var addAnswersBtn = document.getElementById('addAnswers');


function changeAnswer(id)
{
    console.log("changing question: ");
    console.log(id);
    
    $.ajax({
        type: "POST",
        url: "changeAnswer",
        data: "id="+id,
        success: function(msg){
        console.log(msg);
        window.location.href='ChangeAnswerView';
     }
    });
}

function addAnswers(message)
{
    
    modal.style.display = "block";
    document.getElementById("placeholder").innerHTML = message;
    $.ajax({
        type: "POST",
        url: "addAnswers",
        success: function(msg){
        console.log(msg);
     }
    });
    
    
    
}

function addAnswersAnonymously(message)
{
    modal.style.display = "block";
    document.getElementById("placeholder").innerHTML = message;
    $.ajax({
        type: "POST",
        url: "addAnswersAnonimously",
        success: function(msg){
            
        console.log(msg);
     }
    });
}



