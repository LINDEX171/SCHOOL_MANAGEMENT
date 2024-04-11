@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Ajouter Niveau</h5>
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
            <form class="form-horizontal" action="{{ Route('enregistrerEleve') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group"><label class="col-lg-2 control-label">Matricule</label>
                    <div class="col-lg-10"><input  name="Matricule" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Prénom</label>
                    <div class="col-lg-10"><input  name="Prénom" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10"><input  name="Nom" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Adresse</label>
                    <div class="col-lg-10"><input  name="Adresse" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">DateNaissance</label>
                    <div class="col-lg-10"><input type="date" name="DateNaissance" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Lieu naissance</label>
                    <div class="col-lg-10"><input  name="LieuNaissance" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Pays</label>
                    <div class="col-lg-10"><input  name="Pays" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nationalité</label>
                    <div class="col-lg-10"><input  name="Nationalite" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Prénom Pere</label>
                    <div class="col-lg-10"><input  name="PrénomPere" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Tel père</label>
                    <div class="col-lg-10"><input  name="TelPere" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Prénom Mère</label>
                    <div class="col-lg-10"><input  name="PrénomMere" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nom Mère</label>
                    <div class="col-lg-10"><input  name="NomMere" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Tel Mère</label>
                    <div class="col-lg-10"><input  name="TelMere" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10"><input  type="email" name="Email" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Photo</label>
                    <div class="col-lg-10"><input  type="Photo" name="Email" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Saisipar</label>
                    <div class="col-lg-10"><input  name="saisipar" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Maladie</label>
                    <div class="col-lg-10"><input  name="Maladie" class="form-control"> </div>
                </div> <br>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-primary btn-orange" type="submit">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection