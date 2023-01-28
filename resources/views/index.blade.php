@extends('base')

@section('title', 'Home')

@section('content')
    <h1 class="text-center py-2">Home</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Provenienza</th>
                <th scope="col">Gradazione</th>
                <th scope="col">Prezzo</th>
                <th scope="col"></th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beer)
            <tr>
                <th scope="row">{{ $beer->id }}</th>
                <td class="text-capitalize">{{ $beer->name }}</td>
                <td class="text-uppercase">{{ $beer->nation }}</td>
                <td>{{ $beer->alcohol }}°</td>
                <td>{{ $beer->price }}</td>
                <td><img src="{{ $beer->img_url }}" alt=""></td>
                <td>
                    <a href="{{ route('beers.show', compact('beer')) }}">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <br>
                    <a href="{{ route('beers.edit', compact('beer')) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <br>
                    <form action="{{ route('beers.destroy', compact('beer')) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button>
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pt-5 text-center">
        <a href="{{ route('beers.create') }}">
            <button>add a beer</button>
        </a>
    </div>
@endsection
