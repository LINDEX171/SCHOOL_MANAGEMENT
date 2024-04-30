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
                                    <th class="col-lg-2">Niveau</th>
                                    <th class="col-lg-2">Cycle</th>
                                    <th class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($niveau as $n)
                                <tr>
                                    <td>{{ $n->Niveau }}</td>
                                    <td>{{ $n->Cycle }}</td>
                                    <td>
                                        <a href="/update-partenaire/{{ $n->id }}" class="btn btn-info btn-sm btn-orange">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        <a href="/delete-partenaire/{{ $n->id }}" class="btn btn-danger btn-sm">
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
