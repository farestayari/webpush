@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @include('partials/side')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Historique des notifications</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nom et prénom</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Notification</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Envoyer</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                <form method="POST" action="{{ route('handleUnicastNotification') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">Message</label>
                                                          <input type="text" class="form-control" id="message" name="message" placeholder="Votre Text">
                                                          <input type="hidden" name="id" value="{{ $user->id }}">
                                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        @if (!$user->playerId )
                                        <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
                                        @else
                                        <button type="submit" class="btn btn-primary" name="submit" disabled>Envoyer</button>
                                        @endif
                                        </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </div>
                </div>
            </div>
        </div>
      
            
         
       
          
    </div>

    
</div>
@endsection
