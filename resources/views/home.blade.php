@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pour recevoir des notifications personalisé veuillez cliqué sur la boutton sous déssous</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-4 center-block">
                            <button type="button" name="accept" id="accept" class="btn btn-dark">Accepter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
