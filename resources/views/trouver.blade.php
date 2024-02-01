<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <div class="col-lg-7">
                                            <div class="p-5">
                                                <h4 class="text-dark mb-4">Quel document avez-vous trouvé?<br></h4>
                                                <div class="text-center"></div>
                                                <form id="form" class="user" method="POST" >
                                                
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
                                                    <div class="form-group text-left"><label class="text-left" style="font-size: .8rem;">Image du document</label><img id="img-preview2"><input class="form-control-file doc-img" type="file" id="doc-img" required="" onchange="document.getElementById(&#39;img-preview&#39;).src=window.URL.createObjectURL(this.files[0]);document.getElementById(&#39;img-preview2&#39;).src=window.URL.createObjectURL(this.files[0])" name="img" enctype=""></div>
                                                    <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: rgb(28,200,138);border-bottom-style: none;">Signaler</button>
                                                    <hr>
                                                </form>
                                                <div class="text-left">
                                                    <p style="font-size: .8rem;">*Entrer les informations sans aucune erreur<br>*Le dépôt du document auprès des autorités est hautement recommandé<br>*Une image montrant clairement le document égaré est obligatoire<br><br></p>
                                                </div>
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