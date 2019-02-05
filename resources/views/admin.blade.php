@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @include('partials/side')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veuillez  écrivez votre message de notification</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('handleNotifications') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Message</label>
                          <input type="text" class="form-control" id="message" name="message" placeholder="Votre Text">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
      
            
         
       
          
    </div>

    
</div>
@endsection
