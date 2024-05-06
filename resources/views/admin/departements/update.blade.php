@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Modification Niveau</h5>
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
            <form class="form-horizontal" action="/updatestoredepartement"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" style="display: none;" value="{{ $departement->id }}">
                <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10"><input  name="NomDepartement" value="{{ $departement->NomDepartement }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10"><input  name="Description" value="{{ $departement->Description }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Date Creation</label>
                    <div class="col-lg-10"><input type="date" name="DateCreation" value="{{ $departement->DateCreation }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Responsable</label>
                    <div class="col-lg-10"><input  name="Responsable" value="{{ $departement->Responsable }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nombre Employés</label>
                    <div class="col-lg-10"><input  name="NombreEmployes" value="{{ $departement->NombreEmployes }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nombre Etudiants</label>
                    <div class="col-lg-10"><input  name="NombreEtudiants" value="{{ $departement->NombreEtudiants }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Equipements</label>
                    <div class="col-lg-10"><input  name="Equipements" value="{{ $departement->Equipements }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Contact</label>
                    <div class="col-lg-10"><input  name="Contacts" value="{{ $departement->Contacts }}" class="form-control" required> </div>
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
@endsection