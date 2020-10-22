@include('templates.header');


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <center>    <h4 class="card-title ">Cadastrar Usuário </h4>
                    <p class="card-category">Preencha os dados para cadastrar</p>     </center>
                </div>
                <div class="card-body">
                    <form action="{{route('store')}}" method="Post">



                        @csrf


                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                        <div class="form-group row">
                            <label for="nome" class="col-md-2 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') é inválido @enderror" name="name" required autofocus>

                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') é inválido @enderror" name="email" required autofocus>


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autofocus>

                            </div>



                        </div>




                        <button type="submit" class="btn btn-primary"> Cadastrar </button>


                    </form>





                </div>
            </div>
        </div>
    </div>
</div>