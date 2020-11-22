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
        $(document).ready(function () {
            var qntEmails;
            var previousQntEmails;
            var i = 1;

            function request() {
                $.ajax({
                    url:"{{ route('emails') }}",
                    type:"GET",
                    success:function(emails) {
                        qntEmails = emails.emails.length; // 5

                        function preencherTabela(){
                            $('#tabela').empty();
                            $.each(emails, function(index, emails){
                                for(var i=0; emails.length > i; i++) {
                                    $('#tabela').append('<tr><td>' + emails[i].id + '</td><td>' + emails[i].name + '</td><td>' + emails[i].assunto + '</td>' +
                                        '<td>' + emails[i].created_at + '</td><td><a href="#">Details</a></td></tr>');
                                }
                            })
                        }

                        if (i === 1){
                            preencherTabela();
                        }
                        i++;

                        if (qntEmails === previousQntEmails){
                            console.log("Não faz nada.");
                        } else {
                            preencherTabela();
                            previousQntEmails = qntEmails;
                        }
                    }
                })
            }

            var intervalo = setInterval(function(){
                request();
            }, 1);
        });
    </script>

@endsection
