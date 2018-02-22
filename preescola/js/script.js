$(function(){
   
    $('#busca').on('keyup', function(){
       var texto = $(this).val();
       
       $.ajax({
           url:'busca.php',
           type:'POST',
           data:{texto:texto},
           success:function(html) {
               $('#resultado').html(html);
           }
       });   
   });    
});

$(function(){
   
    $('#busca2').on('keyup', function(){
       var texto = $(this).val();
       
       $.ajax({
           url:'buscadisciplina.php',
           type:'POST',
           data:{texto:texto},
           success:function(html) {
               $('#resultado').html(html);
           }
       });   
   });    
});

function editar(id) {

    $.ajax({
        url: 'editarreligiao.php',
        type: 'POST',
        data: {id: id},
        beforeSend: function () {
            $('#modal').find('.modal-body').html('Carregando...');
            $('#modal').modal('show');
        },
        success: function (html) {
            $('#modal').find('.modal-body').html(html);
            $('#modal').find('.modal-body').find('form').on('submit', function (e) {
                e.preventDefault();

                var nome = $(this).find('input[id=nome]').val();
                var id = $(this).find('input[id=id]').val();

                $.ajax({
                    url: 'salvar.php',
                    type: 'POST',
                    data: {nome: nome, id: id},
                    success: function () {
                        alert("Dados alterados com sucesso!");
                        window.location.href = window.location.href;
                    }
                });
            });
            $('#modal').modal('show');
        }
    });
}

function excluir(id) {
    $('#modal').find('.modal-body').html('Tem certeza que deseja excluir a religião?<br/><button class="btn btn-danger" onclick="excluirReligiao('+id+')">SIM</button><button class="btn btn-success" onclick="fechar()">NAO</button>');
    $('#modal').modal('show');
}

function excluirReligiao(id) {
    $.ajax({
        url: 'excluir.php',
        type: 'POST',
        data: {id: id},
        success: function () {
            alert("Religião excluida com sucesso!");
            window.location.href = window.location.href;
        }
    });
}