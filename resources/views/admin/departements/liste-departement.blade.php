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
                    <h5>Liste Niveau</h5>
                    <div class="ibox-tools">
                        <a href="#" class="btn btn-primary btn-orange" data-toggle="modal" data-target="#modal-form">Ajouter Departement</a>
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
                                    <th class="col-lg-1">Nom</th>
                                    <th class="col-lg-1">Description</th>
                                    <th class="col-lg-1">Date Creation</th>
                                    <th class="col-lg-1">Responsable</th>
                                    <th class="col-lg-1">Nombre employes</th>
                                    <th class="col-lg-1">Nombre Etudiants</th>
                                    <th class="col-lg-1">Equipements</th>
                                    <th class="col-lg-1">Contact</th>
                                    <th class="col-lg-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departement as $d)
                                <tr>
                                    <td>{{ $d->NomDepartement }}</td>
                                    <td>{{ $d->Description }}</td>
                                    <td>{{ $d->DateCreation }}</td>
                                    <td>{{ $d->Responsable }}</td>
                                    <td>{{ $d->NombreEmployes }}</td>
                                    <td>{{ $d->NombreEtudiants }}</td>
                                    <td>{{ $d->Equipements }}</td>
                                    <td>{{ $d->Contacts }}</td>
                                    <td >
                                        <a href="/update-departement/{{ $d->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        
                                        <a href="/delete-departement/{{ $d->id }}" class="btn btn-danger btn-sm">
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
                <h4 class="modal-title">Ajouter Departements</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ Route('enregistrerDepartement') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Première colonne -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Nom</label>
                                <div class="col-lg-8">
                                    <input name="NomDepartement" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Description</label>
                                <div class="col-lg-8">
                                    <input name="Description" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Date Creation</label>
                                <div class="col-lg-8">
                                    <input type="date" name="DateCreation" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Responsable</label>
                                <div class="col-lg-8">
                                    <input name="Responsable" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!-- Deuxième colonne -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Nombre Employes</label>
                                <div class="col-lg-8">
                                    <input name="NombreEmployes" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Nombre Etudiants</label>
                                <div class="col-lg-8">
                                    <input name="NombreEtudiants" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Equipements</label>
                                <div class="col-lg-8">
                                    <input name="Equipements" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label">Contact</label>
                                <div class="col-lg-8">
                                    <input name="Contacts" class="form-control" required>
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
