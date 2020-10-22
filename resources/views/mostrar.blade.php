@include("templates.header")




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <center>  <h4 class="card-title ">Dados do Usuario </h4>
                    <p class="card-category">Todos os dados do usuário {{$usuario->name}}</p> </center>
                </div>
                <div class="card-body">






                


                    <div class="form-group row">
                        <label for="nome" class="col-md-2 col-form-label text-md-right">Nome</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control"  value="{{$usuario->name}}" name="name" disabled autofocus>

                        </div>
                    </div>
                    <div class="form-group row">

                        <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email"  value="{{$usuario->email}}" class="form-control" name="email" disabled autofocus>


                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">Senha</label>

                        <div class="col-md-6">
                            <input id="password" type="text" value="{{$usuario->password}}" class="form-control" name="password" disabled autofocus>

                        </div>



                    </div>




                    <div class="form-group row">
                        <label for="status" class="col-md-2 col-form-label text-md-right">Status</label>

                        <div class="col-md-6">
                            <input id="status" type="text" value="{{$usuario->status}}" class="form-control" name="status"  disabled>

                        </div>



                    </div>











                </div>
            </div>
        </div>
    </div>
</div>