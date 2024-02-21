
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Liste des salons</h1>
    <a href="{{route('salon.create_salon')}}" class="btn btn-primary">Créer un salon</a>
</div>
<hr/>
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>

@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>adresse</th>
            <th>telephone</th>
            <th>email</th>
            <th>ifu</th>
            <th>ville</th>
        </tr>
    </thead>
    <tbody>
        @if ($salon->count() > 0)
            @foreach ($salon as $rs )
            <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$rs->nom}}</td>
                <td class="align-middle">{{$rs->adresse}}</td>
                <td class="align-middle">{{$rs->telephone}}</td>
                <td class="align-middle">{{$rs->email}}</td>
                <td class="align-middle">{{$rs->ifu}}</td>
                <td class="align-middle">{{$rs->ville}}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('salon.show', $rs->id)}}" type="button" class="btn btn-secondary">Détail</a>
                        <a href="{{route('salon.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                        <form action="{{route('salon.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>

            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Le salon n'existe pas</td>
            </tr>

        @endif
    </tbody>
</table>

<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

