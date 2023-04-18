@extends('layouts.app')


@section('title', 'Edit')

@section('main')

<section class="section">
    <div class="section-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>{{ __('Edition Contact') }}</h4>
            </div>
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
				<input type="hidden" name="id" value="{{ $contact->id }}">
				@csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="nom">{{ __('Nom') }}</label>
                      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom" value="{{ old('nom', $contact->nom) }}">
                    @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="prenom">{{ __('Prenom') }}</label>
                      <input type="text" id="prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prenom" value="{{ old('nom', $contact->prenom) }}">
                    @error('prenom')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="telephone">{{ __('Telephone') }}</label>
                      <input type="text" id="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" placeholder="Téléphone" value="{{ old('nom', $contact->telephone) }}">
                    @error('adresse')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">{{ __('Email') }}</label>
                      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('nom', $contact->email) }}">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                      <label for="adresse">{{ __('Adresse') }}</label>
                      <input type="text" id="adresse" name="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="Adresse" value="{{ old('nom', $contact->adresse) }}">
                    @error('adresse')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
