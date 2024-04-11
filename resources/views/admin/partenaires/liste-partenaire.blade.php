@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Liste Partenaire</h5>
                    <div class="ibox-tools">
                        <a href="{{ route("partenaire")}}" class="btn btn-primary  btn-orange">Ajouter Partenaire</a>
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
                                    <th>ID Partenaire</th>
                                    <th>Denomination</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partenaire as $p)
                                <tr>
                                    <td>{{ $p->IDPartenaire }}</td>
                                    <td>{{ $p->Denomination }}</td>
                                    <td>{{ $p->Email }}</td>
                                    <td>{{ $p->Tel }}</td>
                                    <td>
                                        <a href="/update-partenaire/{{ $p->IDPartenaire }}" class="btn btn-info btn-sm">Modifier</a>
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
