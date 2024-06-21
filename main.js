$(document).ready(function(){
    $(".submit").on('click',function(){
        let input = $(".input").val()
        let textarea = $(".textarea").val()

        $.ajax({
            url: 'BAZA.php',
            method: 'post',
            data: {title: input, text: textarea},
            success: function(data){
                console.log(123);
            }
        });
    })
})