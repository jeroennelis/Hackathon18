function chooseCategory(cat){
    
    $.ajax({
        type: "POST",
        url: 'chooseCategory',
        data: "cat="+cat,
        success: function(msg){
            console.log(msg);
            window.location.href='question';
     }
});
}


