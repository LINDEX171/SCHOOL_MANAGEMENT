@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Ajouter Inscription</h5>
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
            <form class="form-horizontal" action="{{ Route('enregistrerInscription') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="classe_id">Classe :</label>
                    <div class="col-lg-10">
                        <select name="classe_id" class="form-control">
                            <option value="" selected disabled>Sélectionnez une classe</option>
                            @foreach ($classes as $classe)
                                <option value="{{ $classe->id }}">{{ $classe->Niveau }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> <br>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="eleve_id">Eleve :</label>
                    <div class="col-lg-10">
                        <select name="eleve_id" class="form-control">
                            <option value="" selected disabled>Sélectionnez une eleve</option>
                            @foreach ($eleves as $eleve)
                                <option value="{{ $eleve->id }}">{{ $eleve->Prénom }} {{ $eleve->Nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Année</label>
                    <div class="col-lg-10"><input name="Annee" class="form-control" required > </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant</label>
                    <div class="col-lg-10"><input  name="Montant" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Montant Payé</label>
                    <div class="col-lg-10"><input  name="MontantPaye" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Valide</label>
                    <div class="col-lg-10"><input  name="Valide" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Paye</label>
                    <div class="col-lg-10"><input  name="Paye" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Inscrit</label>
                    <div class="col-lg-10"><input  name="Inscrit" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Date Inscrit</label>
                    <div class="col-lg-10"><input type="date" name="DateInscription" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Heure Inscription</label>
                    <div class="col-lg-10"><input type="time" name="HeureInscription" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">NoInscription</label>
                    <div class="col-lg-10"><input  name="NoInscription" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Subvention</label>
                    <div class="col-lg-10"><input  name="Subvention" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Reliquat</label>
                    <div class="col-lg-10"><input  name="Reliquat" class="form-control" required> </div>
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