@extends('layouts.app')
@section('content')


<div class="wrapper wrapper-content animated fadeIn">


    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Eleve</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Tuteur</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Information élève</h5>
                                    <div class="ibox-tools">
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config option 1</a>
                                            </li>
                                            <li><a href="#">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <form class="form-horizontal" action="/updatestoreeleve" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="id" style="display: none;" value="{{ $eleve->id }}">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nom</label>
                                            <div class="col-lg-4">
                                                <input name="Nom" class="form-control" value="{{ $eleve->Nom }}" required>
                                            </div>
                                            <label class="col-lg-2 control-label">Prénom</label>
                                            <div class="col-lg-4">
                                                <input name="Prénom" class="form-control" value="{{ $eleve->Prénom }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Matricule</label>
                                            <div class="col-lg-4">
                                                <input name="Matricule" class="form-control" value="{{ $eleve->Matricule }}" required>
                                            </div>
                                            <label class="col-lg-2 control-label">Adresse</label>
                                            <div class="col-lg-4">
                                                <input name="Adresse" class="form-control" value="{{ $eleve->Adresse }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-4">
                                                <input name="Email" class="form-control" value="{{ $eleve->Email }}" required>
                                            </div>
                                            <label class="col-lg-2 control-label">Tel élève</label>
                                            <div class="col-lg-4">
                                                <input name="TelEleve" class="form-control" value="{{ $eleve->TelEleve }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Date de naissance</label>
                                            <div class="col-lg-4">
                                                <input type="date" name="DateNaissance" class="form-control" value="{{ $eleve->DateNaissance }}" required>
                                            </div>
                                            <label class="col-lg-2 control-label">Lieu de naissance</label>
                                            <div class="col-lg-4">
                                                <input name="LieuNaissance" class="form-control" value="{{ $eleve->LieuNaissance }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nationalité</label>
                                            <div class="col-lg-4">
                                                <input name="Nationalite" class="form-control" value="{{ $eleve->Nationalite }}" required>
                                            </div>
                                            <label class="col-lg-2 control-label">Pays</label>
                                            <div class="col-lg-4">
                                                <input name="Pays" class="form-control" value="{{ $eleve->Pays }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button id="suivantEleve" class="btn btn-sm btn-primary btn-orange" type="button">Suivant</button>
                                            </div>
                                        </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Tuteur de l'élève</h5>
                                        <div class="ibox-tools">
                                            <ul class="dropdown-menu dropdown-user">
                                                <li><a href="#">Config option 1</a>
                                                </li>
                                                <li><a href="#">Config option 2</a>
                                                </li>   
                                            </ul>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="form-horizontal" >
                                        
                                          
                                            <div class="form-group"><label class="col-lg-2 control-label">Nomcomplet Pere</label>
                                                <div class="col-lg-10"><input  name="NomPere" value="{{ $eleve->NomPere }}" class="form-control" required> </div>
                                            </div> <br>
                                            <div class="form-group"><label class="col-lg-2 control-label">Tel père</label>
                                                <div class="col-lg-10"><input  name="TelPere" value="{{ $eleve->TelPere }}"  class="form-control" required> </div>
                                            </div> <br>
                                            <div class="form-group"><label class="col-lg-2 control-label">Nomcomplet Mère</label>
                                                <div class="col-lg-10"><input  name="NomMere" value="{{ $eleve->NomMere }}" class="form-control" required> </div>
                                            </div> <br>
                                            <div class="form-group"><label class="col-lg-2 control-label">Tel Mère</label>
                                                <div class="col-lg-10"><input  name="TelMere" value="{{ $eleve->TelMere }}"  class="form-control" required> </div>
                                            </div> <br>
                                            <div class="form-group"><label class="col-lg-2 control-label">Saisipar</label>
                                                <div class="col-lg-10"><input  name="saisipar" value="{{ $eleve->saisipar }}" class="form-control" required> </div>
                                            </div> <br>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-primary btn-orange" type="submit">Modifier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
      
    </div>


 



</div>

<script>
    // Détecter le clic sur le bouton "Suivant"
    document.getElementById('suivantEleve').addEventListener('click', function() {
        // Activer l'onglet Tuteur
        document.querySelector('[href="#tab-2"]').click();
    });
</script>


@endsection