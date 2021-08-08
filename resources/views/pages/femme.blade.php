@extends("template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Age</th>
                <th scope="col">Nom</th>
                <th scope="col">Genre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($memberFs as $memberF)
                <tr>
                    <td>{{ $memberF->id }}</td>
                    <td>{{ $memberF->age }}</td>
                    <td>{{ $memberF->nom }}</td>
                    <td>{{ $memberF->genre }}</td>
                    <td>
                        <form action="/member--delete/{{ $memberF->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-danger text-white" type="submit" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
