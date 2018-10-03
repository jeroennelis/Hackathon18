var path = "http://a17-webapps10.studev.groept.be/elderly/assets/profile_pictures/";

function addPicture(photo, id, name){
    
    console.log("adding 1 photo");
    
    console.log (photo);
    console.log (id);
    
    const placeholder = document.getElementById('placeholder');
    
    var HTMLBlock = '<div class="col-sm-8 offset-sm-2"><div class="card picCard center" style="width: 10rem;" onclick="getResidentInfo'+'(' + id + ')'+'"><img class="card-img-top img-fluid" src="' + path.concat(photo) + '" alt="Picture From Database"><div class="card-block"><div class="card-title titleBot"><span>'+ name +'</span></div></div></div></div>';
    
    placeholder.innerHTML += HTMLBlock;
}

function addPictures(photo1, id1, name1, photo2, id2, name2){
    
    console.log("adding 2 photos");
    
    const placeholder = document.getElementById('placeholder');
    
    var HTMLBlock ='<div class="col-sm-4 offset-sm-2"><div class="card picCard" style="width: 10rem;" onclick="getResidentInfo'+'(' + id1 + ')'+'"><img class="card-img-top img-fluid" src="' + path.concat(photo1) + '" alt="Picture From Database"><div class="card-block"><div class="card-title titleBot"><span>'+ name1 +'</span></div></div></div></div><div class="col-sm-6"><div class="card picCard" style="width: 10rem;" onclick="getResidentInfo'+'(' + id2 + ')'+'"><img class="card-img-top img-fluid" src="' + path.concat(photo2) + '" alt="Picture From Database"><div class="card-block"><div class="card-title titleBot"><span>'+ name2 +'</span></div></div></div></div>';
    
    placeholder.innerHTML += HTMLBlock;
}

function getResidentInfo(id){
    console.log(id);
    
    $.ajax({
     type: "POST",
     url: "getAllResidentData",
     data: "id="+id,
     success: function(msg){
        window.location.href='loadResidentInfo';
     }
});
           
}


