@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Ajouter Classe</h5>
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
@endsection