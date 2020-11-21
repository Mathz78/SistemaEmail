@extends('dashboard')

@section('content')
    <div class="tableParent">
        <div class="card">
            <div class="card-header">
                My emails
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">De</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Data de recebimento</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tabela">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                type:'GET',		//Definimos o método HTTP usado
                dataType: 'array',	//Definimos o tipo de retorno
                url: '/dashboard',//Definindo o arquivo onde serão buscados os dados
                success: function(dados){
                    for(var i=0;dados.length>i;i++){
                        //Adicionando registros retornados na tabela
                        $('#tabela').append('<tr><td>'+dados[i].id+'</td><td>'+dados[i].name+'</td><td>'+dados[i].assunto+'</td><td>'+dados[i].created_at+'</td></tr>');
                    }
                }
            });
        });
    </script>
@endsection
