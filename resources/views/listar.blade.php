@include('templates.header')


<style>
a#icone {
    
    margin: 0;
    position: absolute;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    
    }
</style>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <center>
                        <h4 class="card-title ">Tabela de Usuários Cadastrados</h4>
                    </center>
                    <h3> <a id="icone" href="{{route('create')}}"><i class="fa fa-user-plus"></i> Criar Novo Usuário </a></h3>
                </div>


                @include('partials.alerts')

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email </th>
                                    <th>Status </th>
                                    <th> Ações </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                <tr>


                                    <td>{{$usuario->user_id}}</td>
                                    <td><a href="{{route('mostrar',$usuario->user_id)}}">{{$usuario->name}}</a></td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->status}}</td>

                                    <td>
                                        <a href="{{route('editar',$usuario->user_id)}}"> <button type="button" class="btn btn-warning float-left">Editar</button></a>


                                        <form action="{{route('destroy',$usuario->user_id)}}" method="post" class="float-left">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">Deletar</button></a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#table').DataTable({




            "order": [
                [0, "asc"]
            ],
            "pageLength": 10,
            stateSave: true,



            "bJQueryUI": true,
            "oLanguage": {
                "sProcessing": "Processando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "Não foram encontrados resultados",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
                "sInfoFiltered": "",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Seguinte",
                    "sLast": "Último",

                }


            }


        });
    });
</script>
</script>