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
                    <h5>Liste Classe</h5>
                    <div class="ibox-tools">
                        <a href="#" class="btn btn-primary btn-orange" data-toggle="modal" data-target="#modal-form">Ajouter Classe</a>
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
                                    <th class="col-lg-1">libelle</th>
                                    <th class="col-lg-1">Niveau</th>
                                    <th class="col-lg-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classe as $c)
                                <tr>
                                    <td>{{ $c->Classe }}</td>
                                    <td>{{ $c->Libelle }}</td>
                                    <td>{{ $c->Niveau }}</td>
                                   
    
                                    <td >
                                        <a href="/update-classe/{{ $c->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        
                                        <a href="/delete-classe/{{ $c->id }}" class="btn btn-danger btn-sm">
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
                <h4 class="modal-title">Ajouter Classe</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{ Route('enregistrerClasse') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"><label class="col-lg-2 control-label">Classe</label>
                        <div class="col-lg-10"><input  name="Classe" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Libelle</label>
                        <div class="col-lg-10"><input  name="Libelle" class="form-control" required> </div>
                    </div> <br>
                    <div class="form-group"><label class="col-lg-2 control-label">Niveau</label>
                        <div class="col-lg-10"><input  name="Niveau" class="form-control" required > </div>
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
