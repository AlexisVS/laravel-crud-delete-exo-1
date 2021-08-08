@extends("template.index")
@section('content')
    <a href="/create-member">Créé un membre</a>
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
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->age }}</td>
                    <td>{{ $member->nom }}</td>
                    <td>{{ $member->genre }}</td>
                    <td>
                        <form action="/member--delete/{{ $member->id }}" method="POST">
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
