@extends('layouts.app')

@section('template_title')
Partits
@endsection

@section('content')
<div class="container mx-auto sm:px-4 max-w-5xl mx-auto sm:px-4">
    <div class="flex flex-wrap ">
        <div class="sm:w-full pr-4 pl-4">
            <h1>
                {{ __('Partits') }}
            </h1>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="flex-auto p-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="table-nice">
                <thead class="thead-nice">
                    <tr>
                        <th scope="col" class="th-nice">Local</th>
                        <th scope="col" class="th-nice">Gols</th>
                        <th scope="col" class="th-nice">Visitant</th>
                        <th scope="col" class="th-nice">Gols</th>
                        <th scope="col" class="th-nice">Data i hora</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                    <tr class="tr-nice">
                        <td class="td-nice">{{ $game->teamLocal->name }}</td>
                        <td class="td-nice">{{ $game->goals_local }}</td>
                        <td class="td-nice">{{ $game->teamVisitor->name }}</td>
                        <td class="td-nice">{{ $game->goals_visitor }}</td>
                        <td class="td-nice">{{ $game->date_time }}</td>
                        <td class="td-nice">
                            <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                                <a title="Edita" class="edit-btn" href="{{ route('games.edit',$game->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn"><i class="fa fa-fw fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="tr-nice">
                        <td class="td-nice" colspan="6">
                            <a title="Afegeix un partit" class="add-btn" href="{{ route('games.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection