@extends('sendportal::layouts.app')

@section('heading', __('Settings'))

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">

                @if (user()->ownsCurrentTeam())
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <b><a href="{{ route('settings.users.index') }}">{{ __('Manage Users') }}</a></b>
                        <p class="text-muted">
                            {{ __('Add, edit or remove Users') }}
                        </p>
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection
