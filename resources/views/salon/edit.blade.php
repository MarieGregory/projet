@extends('authentification.layout1')
@section('content1')
    <h1 class="mb-0">Détail des salons crées</h1>
    <hr/>
    <form action="{{route('salon.update', $salon->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{$salon->nom}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{$salon->adresse}}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Télephone</label>
                <input type="text" name="telephone" class="form-control" placeholder="Téléphone" value="{{$salon->telephone}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{$salon->email}}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">IFU</label>
                <input type="text" name="ifu" class="form-control" placeholder="IFU" value="{{$salon->ifu}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" placeholder="Ville" value="{{$salon->ville}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
