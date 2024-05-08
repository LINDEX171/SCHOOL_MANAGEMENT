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
                    <h5>Liste Personnel</h5>
                    <div class="ibox-tools">
                        <a href="#" class="btn btn-primary btn-orange" data-toggle="modal" data-target="#modal-form">Ajouter Personnel</a>
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
                                    <th class="col-lg-1">Civilité</th>
                                    <th class="col-lg-1">Nomm</th>
                                    <th class="col-lg-1">Prénom</th>
                                    <th class="col-lg-1">Téléphone</th>
                                    <th class="col-lg-1">Email</th>
                                    <th class="col-lg-1">Saisipar</th>
                                    <th class="col-lg-1">Matricule</th>
                                    <th class="col-lg-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personnel as $p)
                                <tr>
                                    <td>{{ $p->Civilite }}</td>
                                    <td>{{ $p->Nom }}</td>
                                    <td>{{ $p->Prenom }}</td>
                                    <td>{{ $p->Telephone }}</td>
                                    <td>{{ $p->Email }}</td>
                                    <td>{{ $p->Saisipar }}</td>
                                    <td>{{ $p->Matricule }}</td>
                                    <td >
                                        <a href="/update-personnel/{{ $p->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        
                                        <a href="/delete-personnel/{{ $p->id }}" class="btn btn-danger btn-sm">
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
                <form class="form-horizontal" action="{{ Route('enregistrerPersonnel') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"><label class="col-lg-2 control-label">Civilité</label>
                        <div class="col-lg-10"><input  name="Civilite" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Nom</label>
                        <div class="col-lg-10"><input  name="Nom" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Prénom</label>
                        <div class="col-lg-10"><input  name="Prenom" class="form-control" required > </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Téléphone</label>
                        <div class="col-lg-10"><input  name="Telephone" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"><input  name="Email" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Saisi par</label>
                        <div class="col-lg-10"><input  name="Saisipar" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Matricule</label>
                        <div class="col-lg-10"><input  name="Matricule" class="form-control" required> </div>
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
</div>

@endsection
