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
                        <a href="{{ route("inscription")}}" class="btn btn-primary  btn-orange">Ajouter Inscription</a>
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
                                    <th class="col-lg-1">Année</th>
                                    <th class="col-lg-1">Montant</th>
                                    <th class="col-lg-1">Montant Paye</th>
                                    <th class="col-lg-1">Valide</th>
                                    <th class="col-lg-1">paye</th>
                                    <th class="col-lg-1">inscrit</th>
                                    <th class="col-lg-1">Date inscription</th>
                                    <th class="col-lg-1">Heure Inscription</th>
                                    <th class="col-lg-1">NoInscription</th>
                                    <th class="col-lg-1">Subvention</th>
                                    <th class="col-lg-1">Reliquat</th>
                                    <th class="col-lg-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscription as $i)
                                <tr>
                                    <td>{{ $i->classe->Niveau }}</td>
                                    <td>{{ $i->eleve->Nom }} {{ $i->eleve->Prénom }}</td>
                                    <td>{{ $i->Annee }}</td>
                                    <td>{{ $i->Montant}}</td>
                                    <td>{{ $i->MontantPaye }}</td>
                                    <td>{{ $i->Valide }}</td>
                                    <td>{{ $i->Paye }}</td>
                                    <td>{{ $i->Inscrit }}</td>
                                    <td>{{ $i->DateInscription }}</td>
                                    <td>{{ $i->HeureInscription }}</td>
                                    <td>{{ $i->NoInscription }}</td>
                                    <td>{{ $i->Subvention }}</td>
                                    <td>{{ $i->Reliquat }}</td>
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
@endsection
