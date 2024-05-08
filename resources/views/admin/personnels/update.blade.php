@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Modification Personnel</h5>
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
            <form class="form-horizontal" action="/updatestorepersonnel"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" style="display: none;" value="{{ $personnel->id }}">
                <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10"><input  name="Civilite" value="{{ $personnel->Civilite }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-10"><input  name="Nom" value="{{ $personnel->Nom }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Prénom</label>
                    <div class="col-lg-10"><input  name="Prenom" value="{{ $personnel->Prenom }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Téléphone</label>
                    <div class="col-lg-10"><input  name="Telephone" value="{{ $personnel->Telephone }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10"><input  name="Email" value="{{ $personnel->Email }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Saisipar</label>
                    <div class="col-lg-10"><input  name="Saisipar" value="{{ $personnel->Saisipar }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Matricule</label>
                    <div class="col-lg-10"><input  name="Matricule" value="{{ $personnel->Matricule }}" class="form-control" required> </div>
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