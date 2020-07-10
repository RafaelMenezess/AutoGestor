$("#busca").keyup(function(){

    $.ajax({
        url:'consulta_ajax.php',
        type:'POST',
        data:{busca:$("#busca").val()},
        success:function(data){

            $("#resultados").html(data);
        },error:function(){
            $("#resultados").html("Erro!")
        }

    });
});