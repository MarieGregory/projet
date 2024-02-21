@extends('authentification.layout1')
@section('content1')
    <h1 class="mb-0">Détail des salons crées</h1>
    <hr/>
    <div class="col mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{$salon->nom}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Adresse</label>
        <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$salon->adresse}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="telephone" class="form-control" placeholder="Téléphone" value="{{$salon->telephone}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{$salon->email}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">IFU</label>
        <input type="text" name="ifu" class="form-control" placeholder="IFU" value="{{$salon->ifu}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Ville</label>
        <input type="text" name="ville" class="form-control" placeholder="Ville" value="{{$salon->ville}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{$salon->created_at}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{$salon->updatted_at}}" readonly>
    </div>

@endsection
