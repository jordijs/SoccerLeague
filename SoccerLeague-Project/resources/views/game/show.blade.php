@extends('layouts.app')

@section('template_title')
    {{ $game->name ?? 'Show Game' }}
@endsection

@section('content')
    <section class="content container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="md:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div class="float-left">
                            <span class="mb-3">Show Game</span>
                        </div>
                        <div class="float-right">
                            <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" href="{{ route('games.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="flex-auto p-6">
                        
                        <div class="mb-4">
                            <strong>Team Local Id:</strong>
                            {{ $game->team_local_id }}
                        </div>
                        <div class="mb-4">
                            <strong>Team Visitor Id:</strong>
                            {{ $game->team_visitor_id }}
                        </div>
                        <div class="mb-4">
                            <strong>Date Time:</strong>
                            {{ $game->date_time }}
                        </div>
                        <div class="mb-4">
                            <strong>Goals Local:</strong>
                            {{ $game->goals_local }}
                        </div>
                        <div class="mb-4">
                            <strong>Goals Visitor:</strong>
                            {{ $game->goals_visitor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
