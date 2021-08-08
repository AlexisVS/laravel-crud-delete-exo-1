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
            @foreach ($memberHs as $memberH)
                @if ($loop->index <= 15)
                    <tr>
                        <td>{{ $memberH->id }}</td>
                        <td>{{ $memberH->age }}</td>
                        <td>{{ $memberH->nom }}</td>
                        <td>{{ $memberH->genre }}</td>
                        <td>
                            <form action="/member--delete/{{ $memberH->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn-danger text-white" type="submit" value="X">
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
