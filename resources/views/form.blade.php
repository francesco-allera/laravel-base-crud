@php
    if(isset($beer)) {
        $route = route('beers.update', compact('beer'));
        $method = 'PUT';
    } else {
        $route = route('beers.store');
        $method = 'POST';
    }
@endphp

<form action="{{ $route }}" method="post">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="name">nome</label>
        <input type="text" name="name" placeholder="Nome"
            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->name : '' }}">
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
        <label for="appearance">aspetto</label>
        <input type="text" name="appearance" placeholder="Aspetto"
            class="form-control {{ $errors->has('appearance') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->appearance : '' }}">
        <div class="invalid-feedback">{{ $errors->first('appearance') }}</div>
    </div>

    <div class="form-group">
        <label for="taste">gusto</label>
        <input type="text" name="taste" placeholder="Gusto"
            class="form-control {{ $errors->has('taste') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->taste : '' }}">
        <div class="invalid-feedback">{{ $errors->first('taste') }}</div>
    </div>

    <div class="form-group">
        <label for="style">aroma</label>
        <input type="text"  name="style" placeholder="Aroma"
            class="form-control {{ $errors->has('style') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->style : '' }}">
        <div class="invalid-feedback">{{ $errors->first('style') }}</div>
    </div>

    <div class="form-group">
        <label for="nation">provenienza</label>
        <input type="text" name="nation" placeholder="Provenienza"
            class="form-control {{ $errors->has('nation') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->nation : '' }}">
        <div class="invalid-feedback">{{ $errors->first('nation') }}</div>
    </div>

    <div class="form-group">
        <label for="cL">volume in cL</label>
        <input type="text" name="cL" placeholder="Volume in cL"
            class="form-control {{ $errors->has('cL') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->cL : '' }}">
        <div class="invalid-feedback">{{ $errors->first('cL') }}</div>
    </div>

    <div class="form-group">
        <label for="alcohol">gradazione</label>
        <input type="text" name="alcohol" placeholder="Gradazione"
            class="form-control {{ $errors->has('alcohol') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->alcohol : '' }}">
        <div class="invalid-feedback">{{ $errors->first('alcohol') }}</div>
    </div>

    <div class="form-group">
        <label for="price">prezzo</label>
        <input type="text" name="price" placeholder="Prezzo"
            class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->price : '' }}">
        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
    </div>

    <div class="form-group">
        <label for="img_url">Url immagine</label>
        <input type="text" name="img_url" placeholder="Url Immagine"
            class="form-control {{ $errors->has('img_url') ? 'is-invalid' : '' }}"
            value="{{ isset($beer) ? $beer->img_url : '' }}">
        <div class="invalid-feedback">{{ $errors->first('img_url') }}</div>
    </div>

    <div class="text-center">
        <input type="submit" class="btn btn-primary" value="Modifica">
    </div>
</form>
