@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Liste Niveau</h5>
                    <div class="ibox-tools">
                        <a href="{{ route("niveau")}}" class="btn btn-primary  btn-orange">Ajouter Partenaire</a>
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
                                    <th>Niveau</th>
                                    <th>Cycle</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($niveau as $n)
                                <tr>
                                    <td>{{ $n->Niveau }}</td>
                                    <td>{{ $n->Cycle }}</td>
                                    <td>
                                        <a href="/update-niveau/{{ $n->id }}" class="btn btn-info btn-sm">Modifier</a>
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
