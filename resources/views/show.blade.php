@extends('base')

@section('title')
    Beer #{{ $beer->id }}
@endsection

@section('content')
    <div class="container text-center">
        <h1 class="text-capitalize">{{ $beer->name }}</h1>

        <p>
            <img src="{{ $beer->img_url }}" alt="">
        </p>

        <h4 class="mb-5">{{ $beer->price }}&#8364;</h4>

        <h2>Caratteristiche</h2>

        <table class="show text-left">
            <tbody>
                <tr>
                    <th>provenienza</th>
                    <td class="text-uppercase">{{ $beer->nation }}</td>
                </tr>
                <tr>
                    <th>aspetto</th>
                    <td>{{ $beer->appearance }}</td>
                </tr>
                <tr>
                    <th>aroma</th>
                    <td>{{ $beer->style }}</td>
                </tr>
                <tr>
                    <th>gusto</th>
                    <td>{{ $beer->taste }}</td>
                </tr>
                <tr>
                    <th>volume</th>
                    <td>{{ $beer->cL }} cL</td>
                </tr>
                <tr>
                    <th>gradazione</th>
                    <td>{{ $beer->alcohol }}°</td>
                </tr>
                <tr>
                    <th>senza glutine</th>
                    <td class="text-uppercase">
                        {{ $beer->gluten_free === null ? 'no' : 'sì'}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
