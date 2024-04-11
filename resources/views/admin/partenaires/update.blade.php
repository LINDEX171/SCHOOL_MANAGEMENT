@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Modifier Partenaire</h5>
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
            <form class="form-horizontal" action="/updatestorepartenaire"  method="post" enctype="multipart/form-data">
                @csrf 
                <input type="text" name="IDPartenaire" style="display: none;" value="{{ $partenaire->IDPartenaire }}">
                <div class="form-group"><label class="col-lg-2 control-label">Denomination</label>
                    <div class="col-lg-10"><input  name="Denomination" value="{{ $partenaire->Denomination }}" class="form-control"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Adresse</label>
                    <div class="col-lg-10"><input  name="Adresse" class="form-control" value="{{ $partenaire->Adresse }}"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10"><input type="email" name="Email" class="form-control" value="{{ $partenaire->Email }}"> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Téléphone</label>
                    <div class="col-lg-10"><input  name="Tel" class="form-control" value="{{ $partenaire->Tel }}"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Pays</label>
                    <div class="col-lg-10"><input  name="Pays" value="{{ $partenaire->Pays }}" class="form-control"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Numero compte</label>
                    <div class="col-lg-10"><input  name="numero_compte" value="{{ $partenaire->numero_compte }}"class="form-control"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant</label>
                    <div class="col-lg-10"><input  name="montant_du" value="{{ $partenaire->montant_du }}"  class="form-control"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant Paye</label>
                    <div class="col-lg-10"><input  name="montant_paye" value="{{ $partenaire->montant_paye }}" class="form-control"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant Initial</label>
                    <div class="col-lg-10"><input  name="montant_initial" value="{{ $partenaire->montant_initial }}" class="form-control"> </div>
                </div><br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant Initial</label>
                    <div class="col-lg-10"><input type="file"  name="logo" value="{{ $partenaire->logo }}" class="form-control"> </div>
                </div><br>
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