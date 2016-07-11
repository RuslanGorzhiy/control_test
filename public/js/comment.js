
$(document).ready(function(){

    e.preventDefault();
    var name;
    var com;
    $name = document.getElementById("name").value;
    $com  = document.getElementById("review").value;

    $('#addcomment').click(function (){
        $.ajax({
            type: 'POST',
            url: '/comment',
            data: {name: $name,
                   comment: $com},
            success: function(data){
                //$('.results').html(data);
                return 'ok';
            }
        });

    });
});