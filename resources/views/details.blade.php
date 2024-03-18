<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Return.doc</title>
    <meta name="description" content="Plat forme d'enregistrement de document personnel perdu.">
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/asset/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/asset/css/index.css">
</head>

<body id="page-top">

    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <header class="main">
                    <div class="forms">
                        <div class="container flip">
                            <div class="row bounce animated">
                        <div class="container" id="detail">
                            <div></div>
                            <div class="card shadow-lg o-hidden border-0 my-5">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-5 d-none d-lg-flex">
                                            <div class="container d-xl-flex flex-grow-1 align-items-xl-center bg-register-image" style="background: #18aa76;">
                                            <img id="img-preview" width="100%" height="auto" src="{{ asset($piece->image) }}">
                                        </div>
                                        </div>


                                        <div class="col-lg-7">
                                            <div class="p-5">
                                                <h4 class="text-dark mb-4">PLUS DE DETAILS<br></h4>
                                                <div class="text-center"></div>
                                               
                                                <form method="post" action="{{route('traitement')}}" enctype="multipart/form-data" >
                                                @csrf
                                                    @method('post')
                                                    <select class="form-control mb-4" name="type" >
                                                        <option class="form-control" value="CNI">CNI</option>
                                                        <option class="form-control" value="Passport">Passport</option>
                                                        <option class="form-control" value="Licence">Licence</option>
                                                        <option class="form-control" value="autres">Autres</option>
                                                        </select>  
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input class="form-control form-control-text" disabled type="text" id="exampleFirstName" placeholder="Nom sur doc" name="name" required="" value="{{ $piece->name }}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input class="form-control form-control-text"  disabled type="text" id="exampleFirstName-3" placeholder="Prénom sur doc" name="surname" required="" value="{{ $piece->surname }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-text" disabled type="text" placeholder="Réference du document" name="reference" required="" value="{{ $piece->reference }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-text" disabled type="tel" name="contact" placeholder="Votre numero de téléphone" aria-describedby="Contact" required="" value="{{ $piece->contact }}"></div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-text" disabled type="text" placeholder="Localisation du document" name="localisation" required="" value="{{ $piece->localisation }}">
                                                    </div>
                                                
                                                   
                                                </form>
                                                
                                            </div>
                                        </div>
                                     </div>
                             </div>
                    </div>


                </div>
            </header>
         </div>
                        
    </div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/chart.min.js')}}"></script>
    <script src="{{asset('asset/js/bs-init.js')}}"></script>
    <script src="{{asset('asset/js/index.js')}}"></script>
    <script src="{{asset('asset/js/theme.js')}}"></script>
</body>

</html>