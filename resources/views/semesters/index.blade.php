@extends('layouts.panel')

@section('title', 'Tous les semestres à l\'étranger')

@section('title-right')
    <a class="btn btn-primary" href="{{ route('semesters.create') }}">
        <i data-feather="plus"></i> Nouveau semestre
    </a>
@endsection

@section('content')
    @include('layouts.delete-modal')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Lieu</th>
                        <th>Formation</th>
                        <th>Type</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($semesters->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">
                                Aucun échange pour l'instant... Ajoutez-en un maintenant.
                            </td>
                        </tr>
                    @endif
                    @foreach($semesters as $semester)
                        <tr>
                            <th>{{ $semester->student->first_name ?? 'Pas de prénom' }}</th>
                            <th>{{ $semester->student->last_name ?? 'Pas de nom' }}</th>
                            <td>{{ $semester->study->university }}</td>
                            <td>{{ $semester->study->name }}</td>
                            <td>{{ $semester->type }}</td>
                            <td>{!! $semester->badge !!}</td>
                            <td class="text-right w-10">
                                <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-primary">
                                    <i class="feather-16" data-feather="edit"></i> Modifier
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal"
                                        data-delete="semesters" data-id="{{ $semester->id }}">
                                    <i class="feather-16" data-feather="trash"></i> Supprimer
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


