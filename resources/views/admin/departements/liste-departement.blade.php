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
                        <a href="{{ route("departement")}}" class="btn btn-primary  btn-orange">Ajouter Departement</a>
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
@endsection
