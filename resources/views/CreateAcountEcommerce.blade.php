@extends('layauts.plantilla')

@section('title','Crear Cuenta')
    
@section('header')
    <header class="text-center">
            <img src="{{asset('images/icons/LogoMercado.jpg')}}" class="img img-fluid" alt="">    
    </header>
@endsection

<!--######################### main ###############################-->
@section('main')
    
<main>       
    <div class="container">
        <div class="row ">
            <div class="col-md-5 col-lg-5 mx-auto d-flex align-items-center imagen">
                <img src="{{asset('images/icons/LogoMercado.jpg')}}" class="img img-fluid" alt="">  
            </div>
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class=" shadow  my-5">
              
            <div class="card-body p-4 p-sm-5">
                        <div class="text-center">
                            <h3>crea una cuenta </h3>
                        </div>
                        <form action="" method="POST">
                                <div class="row">
                                    <div class="form-floating mb-3 col">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
                                    </div>
                                    <div class="form-floating mb-3 col" >
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Apellido">
                                    </div>
                                </div>
                
                                <div class="">
                                    <div class="form-floating mb-3 ">
                                        <input type="email" placeholder="Correo Electronico" class="form-control" name="" id="">
                                    </div>
                                <div class="form-floating mb-3 " >
                                    <input type="password" placeholder="Contrasenia" class="form-control" name="" id="">
                                </div>

                    
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Recordar contrasenia
                                    </label>
                                </div>

                                <div>
                                    <label for=""> Fecha de nacimiento </label>
                                    <input type="date" class="form-control " name="" id="" >
                                    <div class="mb-3 col-md-8 col-sm-12 " ></div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-12 mb-2">
                                        <label class="form-check-label" for="inlineRadio1">Sexo:</label>
                                    </div>
                                    <div class="form-check col-md-4">
                                        <input class="position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                                    </div>
                                    <div class="form-check col-md-4">
                                        <input class="position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
                                        <label class="form-check-label" for="inlineRadio1">Mujer</label>
                                    </div>
                                </div>                  
                            </div>
                
                
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    
                            <div class="d-grid text-center">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Crear Cuenta</button>
                            </div>
       
                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
<!--#################### footer ##############################-->
@section('footer')
    <footer class="text-center">
        <img src="logoMuni.jpeg" alt="" width="50px">
    </footer>           
@endsection