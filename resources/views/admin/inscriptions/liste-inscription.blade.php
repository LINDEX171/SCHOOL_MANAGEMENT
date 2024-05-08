@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <h5>Liste Inscription</h5>
                    <div class="ibox-tools">
                        <a href="#" class="btn btn-primary btn-orange" data-toggle="modal" data-target="#modal-form">Ajouter Inscription</a>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-lg-1">Classe</th>
                                    <th class="col-lg-1">Eleve</th>
                                    <th class="col-lg-1">Montant Paye</th>
                                    <th class="col-lg-1">Date inscription</th>
                                    <th class="col-lg-1">Reliquat</th>
                                    <th class="col-lg-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscription as $i)
                                <tr>
                                    <td>{{ $i->classe->Niveau }}</td>
                                    <td>{{ $i->eleve->Nom }} {{ $i->eleve->Prénom }}</td>
                                    <td>{{ $i->MontantPaye }}</td>
                                    <td>{{ $i->DateInscription }}</td>
                                   
                                    <td >
                                        <a href="/update-inscription/{{ $i->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        
                                        <a href="/delete-inscription/{{ $i->id }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal popup -->
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Ajouter Niveau</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ Route('enregistrerInscription') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Première colonne -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 control-label" for="classe_id">Classe :</label>
                                <div class="col-lg-8">
                                    <select name="classe_id" class="form-control">
                                        <option value="" selected disabled>Sélectionnez une classe</option>
                                        @foreach ($classes as $classe)
                                            <option value="{{ $classe->id }}">{{ $classe->Niveau }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label" for="eleve_id">Eleve :</label>
                                <div class="col-lg-8">
                                    <select name="eleve_id" class="form-control">
                                        <option value="" selected disabled>Sélectionnez un élève</option>
                                        @foreach ($eleves as $eleve)
                                            <option value="{{ $eleve->id }}">{{ $eleve->Prénom }} {{ $eleve->Nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Année</label>
                                <div class="col-lg-8">
                                    <input name="Annee" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Montant</label>
                                <div class="col-lg-8">
                                    <input name="Montant" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Date Inscrit</label>
                                <div class="col-lg-8">
                                    <input type="date" name="DateInscription" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Heure Inscription</label>
                                <div class="col-lg-8">
                                    <input type="time" name="HeureInscription" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">NoInscription</label>
                                <div class="col-lg-8">
                                    <input name="NoInscription" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!-- Deuxième colonne -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Montant Payé</label>
                                <div class="col-lg-8">
                                    <input name="MontantPaye" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Valide</label>
                                <div class="col-lg-8">
                                    <input name="Valide" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Payé</label>
                                <div class="col-lg-8">
                                    <input name="Paye" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Inscrit</label>
                                <div class="col-lg-8">
                                    <input name="Inscrit" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Subvention</label>
                                <div class="col-lg-8">
                                    <input name="Subvention" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Reliquat</label>
                                <div class="col-lg-8">
                                    <input name="Reliquat" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-primary btn-orange" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
