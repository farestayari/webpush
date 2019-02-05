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
                                        <th scope="col">notification</th>
                                        <th scope="col">Envoyé à</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                        <tr>
                                        <td>{{ $message->body }}</td>
                                        <td>{{ $message->created_at }}</td>
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
