@extends("template.index")
@section('content')
    <form action="/create-member--post" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputAge" class="form-label">Age</label>
            <input name="age" type="text" class="form-control" id="inputAge" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="inputNom" class="form-label">Nom</label>
            <input name="nom" type="text" class="form-control" id="inputNom" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="inputGenre" class="form-label">Genre</label>
            <select name="genre" id="inputGenre" class="form-select">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
