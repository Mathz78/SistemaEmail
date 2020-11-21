@extends('dashboard')

@section('content')
    <div class="tableParent">
        <div class="card">
            <div class="card-header">
                Sent e-mails
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
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Victor Alberto</td>
                        <td>Tal coisa</td>
                        <td>20/11/2020</td>
                        <td><a href="#">Details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nikolas Nascimento</td>
                        <td>Sei não</td>
                        <td>20/11/2020</td>
                        <td><a href="#">Details</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Matheus Rocha</td>
                        <td>157 mano</td>
                        <td>20/11/2020</td>
                        <td><a href="#">Details</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
