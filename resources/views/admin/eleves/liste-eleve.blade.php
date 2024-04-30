@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-11">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <h5>Liste Eleve</h5>
                    <div class="ibox-tools">
                        <a href="{{ route("eleve")}}" class="btn btn-primary  btn-orange">Ajouter Eleve</a>
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
                                    <th class="col-lg-2">Matricule</th>
                                    <th class="col-lg-2">Prenom</th>
                                    <th class="col-lg-2">Nom</th>
                                    <th class="col-lg-2">Adresse</th>
                                    <th class="col-lg-2">Email</th>
                                    <th class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eleve as $e)
                                <tr>
                                    <td>{{ $e->Matricule }}</td>
                                    <td>{{ $e->Prénom }}</td>
                                    <td>{{ $e->Nom }}</td>
                                    <td>{{ $e->Adresse }}</td>
                                    <td>{{ $e->Email }}</td>
                                    <td>
                                        <a href="/update-eleve/{{ $e->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        <a href="/delete-eleve/{{ $e->id }}" class="btn btn-danger btn-sm">
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
