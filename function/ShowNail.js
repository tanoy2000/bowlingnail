
function selectNT(){    
    var n = document.getElementById("nail_type").value;
    $.ajax({
        url:"show_nail.php",
        method: "POST",
        data:{
            id : n
        },
        success:function(data) {
            $("#result").html(data);
        } 
    })

}
