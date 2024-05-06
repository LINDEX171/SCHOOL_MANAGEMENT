@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Ajouter Departement</h5>
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
            <form class="form-horizontal" action="{{ Route('enregistrerDepartement') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10"><input  name="NomDepartement" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10"><input  name="Description" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Date Creation</label>
                    <div class="col-lg-10"><input type="date" name="DateCreation" class="form-control" required > </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Responsable</label>
                    <div class="col-lg-10"><input  name="Responsable" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nombre Employes</label>
                    <div class="col-lg-10"><input  name="NombreEmployes" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nombre Etudiants</label>
                    <div class="col-lg-10"><input  name="NombreEtudiants" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Equipements</label>
                    <div class="col-lg-10"><input  name="Equipements" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Contact</label>
                    <div class="col-lg-10"><input  name="Contacts" class="form-control" required> </div>
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