var neverCard = document.getElementById("never");
var notOftenCard = document.getElementById("notOften");
var sometimesCard = document.getElementById("sometimes");
var oftenCard = document.getElementById("often");
var alwaysCard = document.getElementById("always");
var placeholder = document.getElementById("placeholder");
var neverColor = '#FF0000';
var notOftenColor = '#FF6600';
var sometimesColor = '#FFCC00';
var oftenColor = '#339900';
var alwaysColor = '#33CC00';
var darkBlue = '#2F146B';


function deleteHighlight(){

    neverCard.style.border = '1px solid' + darkBlue;
    document.getElementById("neverText").style.color = darkBlue;
    document.getElementById("neverIcon").style.color = darkBlue;

    notOftenCard.style.border = '1px solid' + darkBlue;
    document.getElementById("notOftenText").style.color = darkBlue;
    document.getElementById("notOftenIcon").style.color = darkBlue;

    sometimesCard.style.border = '1px solid' + darkBlue;
    document.getElementById("sometimesText").style.color = darkBlue;
    document.getElementById("sometimesIcon").style.color = darkBlue;

    oftenCard.style.border = '1px solid' + darkBlue;
    document.getElementById("oftenText").style.color = darkBlue;
    document.getElementById("oftenIcon").style.color = darkBlue;

    alwaysCard.style.border = '1px solid' + darkBlue;
    document.getElementById("alwaysText").style.color = darkBlue;
    document.getElementById("alwaysIcon").style.color = darkBlue;
}

function postAnswer(score){
    $.ajax({
        type: "POST",
        url: "receiveAnswer",
        data: "score="+score,
        success: function(msg){
        console.log(msg);
     }
    });
}

function never(){
    deleteHighlight();
    console.log("never");
    neverCard.style.border='2px solid' + neverColor;
    document.getElementById("neverText").style.color = neverColor;
    document.getElementById("neverIcon").style.color = neverColor;
    postAnswer(1);
    
}
function notOften(){
    deleteHighlight();
    console.log("notOften");
    notOftenCard.style.border='2px solid' + notOftenColor;
    document.getElementById("notOftenText").style.color = notOftenColor;
    document.getElementById("notOftenIcon").style.color = notOftenColor;
    postAnswer(2);
    
}

function sometimes(){
    deleteHighlight();
    console.log("someTimes");
    sometimesCard.style.border='2px solid' + sometimesColor;
    document.getElementById("sometimesText").style.color = sometimesColor ;
    document.getElementById("sometimesIcon").style.color = sometimesColor ;
    postAnswer(3);
    
}

function often(){
    deleteHighlight();
    console.log("often");
    oftenCard.style.border='2px solid' + oftenColor;
    document.getElementById("oftenText").style.color = oftenColor;
    document.getElementById("oftenIcon").style.color = oftenColor;
    postAnswer(4);
    
}

function always(){
    deleteHighlight();
    console.log("always");
    alwaysCard.style.border='2px solid' + alwaysColor;
    document.getElementById("alwaysText").style.color = alwaysColor;
    document.getElementById("alwaysIcon").style.color = alwaysColor;
    postAnswer(5);
}

