<!--   COMPLETED      -->


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Return.doc</title>
    <meta name="description" content="Plat forme d'enregistrement de document personnel perdu.">
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/asset/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/asset/css/index.css">
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>

</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <header class="main">
                <div class="forms">
                    <div class="container flip">
                        <div class="row bounce animated">
                            <div class="col-4 align-self-center" style="padding: 30px 0;transition: border 0.1s;"><a class="btn btn-success btn-icon-split" role="button" id="found-btn"><span class="text-white-50 icon"><i class="far fa-id-card"></i></span><span class="text-white text">J'ai Trouvé</span></a></div>
                            <div class="col-4 col-sm-4 col-md-4 align-self-center exchange"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" id="icon" style="color: var(--gray-dark);">
                                    <path d="M4.99255 12.9841C4.44027 12.9841 3.99255 13.4318 3.99255 13.9841C3.99255 14.3415 4.18004 14.6551 4.46202 14.8319L7.14964 17.5195C7.54016 17.9101 8.17333 17.9101 8.56385 17.5195C8.95438 17.129 8.95438 16.4958 8.56385 16.1053L7.44263 14.9841H14.9926C15.5448 14.9841 15.9926 14.5364 15.9926 13.9841C15.9926 13.4318 15.5448 12.9841 14.9926 12.9841L5.042 12.9841C5.03288 12.984 5.02376 12.984 5.01464 12.9841H4.99255Z" fill="currentColor"></path>
                                    <path d="M19.0074 11.0159C19.5597 11.0159 20.0074 10.5682 20.0074 10.0159C20.0074 9.6585 19.82 9.3449 19.538 9.16807L16.8504 6.48045C16.4598 6.08993 15.8267 6.08993 15.4361 6.48045C15.0456 6.87098 15.0456 7.50414 15.4361 7.89467L16.5574 9.01589L9.00745 9.01589C8.45516 9.01589 8.00745 9.46361 8.00745 10.0159C8.00745 10.5682 8.45516 11.0159 9.00745 11.0159L18.958 11.0159C18.9671 11.016 18.9762 11.016 18.9854 11.0159H19.0074Z" fill="currentColor"></path>
                                </svg></div>
                            <div class="col-4 align-self-center" style="padding: 30px 0;transition: border 0.1s;"><a class="btn btn-warning btn-icon-split" role="button" id="search-btn"><span class="text-white text">Jai Perdu</span><span class="text-white-50 icon"><i class="fas fa-search"></i></span></a></div>
                        </div>
                    </div>
                    <div class="container" id="found">
                        <div></div>
                        <div class="card shadow-lg o-hidden border-0 my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-flex">
                                        <div class="container d-xl-flex flex-grow-1 align-items-xl-center bg-register-image" style="background: #18aa76;"><img id="img-preview"></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <h4 class="text-dark mb-4">Quel document avez-vous trouvé?<br></h4>
                                            <div class="text-center"></div>
                                            <form id="form" class="user" method="POST" action="{{route('traitement')}}" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="type" checked="checked" value="CNI"><label class="form-check-label" for="formCheck-1">CNI</label></div>
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="type" value="passport"><label class="form-check-label" for="formCheck-1">Passport</label></div>
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="type" value="licence"><label class="form-check-label" for="formCheck-1">Permis de C</label></div>
                                                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="type" value="other"><label class="form-check-label" for="formCheck-1">Autre</label></div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-text" type="text" id="exampleFirstName" placeholder="Nom sur doc" name="name" required=""></div>
                                                    <div class="col-sm-6"><input class="form-control form-control-text" type="text" id="exampleFirstName-3" placeholder="Prénom sur doc" name="surname" required=""></div>
                                                </div>
                                                <div class="form-group"><input class="form-control form-control-text" type="text" placeholder="Réference du document" name="ref" required=""></div>
                                                <div class="form-group"><input class="form-control form-control-text" type="tel" name="tel" placeholder="Votre numero de téléphone" aria-describedby="Contact" required=""></div>
                                                <div class="form-group"><input class="form-control form-control-text" type="text" placeholder="Localisation du document" name="location" required=""></div>
                                                <div class="form-group text-left"><label class="text-left" style="font-size: .8rem;">Image du document</label><img id="img-preview2"><input class="form-control-file doc-img" type="file" id="doc-img" required="" onchange="document.getElementById(&#39;img-preview&#39;).src=window.URL.createObjectURL(this.files[0]);document.getElementById(&#39;img-preview2&#39;).src=window.URL.createObjectURL(this.files[0])" name="img" enctype=""></div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: rgb(28,200,138);border-bottom-style: none;">Signaler</button>
                                                <hr>
                                            </form>
                                            <div class="text-left">
                                                <p style="font-size: .8rem;">*Entrer les informations sans aucune erreur<br>*Le dépôt du document auprès des autorités est hautement recommandé<br>*Une image montrant clairement le document égaré est obligatoire<br><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-sm" id="popup">
                        <div class="row">
                            <div class="col"><i class="far fa-check-circle"></i>
                                <p>Document a été SIGNALER. <strong>Votre geste fait toute la différence</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="search">
                        <div class="card shadow-lg o-hidden border-0 my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-flex">
                                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image5.jpg&quot;);"></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <h4 class="text-dark mb-4">Quel document cherchez-vous?<br></h4>
                                            <div class="text-center"></div>
                                            <form class="user" method="GET" action="{{ route('recherche') }}">
                                            <select class="form-control mb-4" name="type" >
                                                        <option class="form-control">CNI</option>
                                                        <option class="form-control">Passport</option>
                                                        <option class="form-control">Licence</option>
                                                        <option class="form-control">Autres</option>
                                                        </select> 
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-text" type="text" placeholder="Nom" name="name"></div>
                                                    <div class="col-sm-6"><input class="form-control form-control-text" type="text" placeholder="Prénom" name="surname"></div>
                                                </div>
                                                <div class="form-group"><input class="form-control form-control-text" type="text" placeholder="Réference du document" name="reference"></div>
                                                <div class="form-group"><input class="form-control form-control-text" type="email" id="exampleInputEmail-2" aria-describedby="emailHelp" placeholder="Votre Adresse Email" name="mail"></div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: rgb(246,194,62);border-bottom-style: none;border-bottom-color: rgba(78,115,223,0);">Rechecher</button>
                                                <hr>
                                            </form>
                                            <div class="text-left">
                                                <p style="font-size: .8rem;">*Entrer le plus d'informations possible sans commettre d'erreur<br>*En cas d'aucun resultat, un mail vous sera envoyé immédiatement quand votre document sera enregistré<br></p>
                                            </div>
                                    

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="d-sm-flex justify-content-between align-items-center mb-4"><a href="./index.php" style="text-decoration: none;">
                                    <h3 class="text-dark mb-0" style="/*font-size: 15px;*/">SOS.doc<br></h3>
                                </a>
                                <h3 class="text-dark mb-0" style="font-size: 15px;">Powered by ACCESS Tech</h3>
                                <div><a class="btn btn-link btn-block text-white btn-facebook" role="button"><i class="fab fa-facebook-f"></i>&nbsp; .sos.doc-facebook</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Résultat de la recherche</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if($donneesTrouvees== 'true')
          Donnée trouvée!
        @else
          Aucune donnée n'a été trouvée!
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
      
    </div>
  </div>
</div>
@if($donneesTrouvees =='false')
    <script>
        $(document).ready(function(){
            $('#exampleModal').modal('show');
        });
    </script>
@endif


                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-success m-0 font-weight-bold">Vos resultats </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                        <table class="table my-0" id="dataTable">
                                            <thead>
                                                <tr style="background: rgb(224,224,224);">
                                                    <th>Nom </th>
                                                    <th>Prenom </th>
                                                    <th>reference</th>
                                                    <th>Type</th>
                                                    <th>Localisation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($resultats as $resultat)
                                         <tr onclick="window.location='{{ route("autre.vue" ,['id' => $resultat->id]) }}'">
                                            <td>{{ $resultat->name }}</td>
                                            <td>{{ $resultat->surname }}</td>
                                            <td>{{ $resultat->reference }}</td>
                                            <td>{{ $resultat->type }}</td>
                                            <td>{{ $resultat->localisation }}</td>
                                         </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-lg-7 col-xl-6">
                            <div class="card shadow comment">
                                <div class="card-header py-3">
                                    <p class="text-warning m-0 font-weight-bold">Commentaires</p>
                                </div>
                                <div class="card-body">
                                    <form id="comment-form" class="user" method="POST" action="comment.php">
                                        <div class="form-group"><input class="form-control form-control-lg form-control-text" type="email" placeholder="votre email" name="mail" required=""></div>
                                        <div class="form-group"><label>Votre Commentaire</label><textarea class="form-control" id="signature" rows="4" name="comment" required="" placeholder="..."></textarea></div><button class="btn btn-warning btn-block text-white" type="submit" style="border-bottom-style: none;">Envoyé</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright" style="display: flex;"><span>Copyright © Return.doc 2021</span><span style="margin-left: auto!important;">Powered by ACCESS Tech<br></span></div>
                    <div class="text-center my-auto copyright"><a href="about.html">A propos de nous</a></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/chart.min.js')}}"></script>
    <script src="{{asset('asset/js/bs-init.js')}}"></script>
    <script src="{{asset('asset/js/index.js')}}"></script>
    <script src="{{asset('asset/js/theme.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    
</body>

</html>