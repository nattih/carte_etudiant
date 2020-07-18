<div class="card">
    <header class="card-header">
        <p class="card-header-title">UFR</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('filieres.index') }}" @unless($slug) selected @endunless>Toutes UFR</option>
                @foreach($ufrs as $category)
                    <option value="{{ route('filiere.ufr', $category->slug) }}" {{ $slug == $category->slug ? 'selected' : '' }}>{{ $category->nom_ufr }}</option>
                @endforeach

               
            </select>

            <select name="" id=""> @foreach($filieres as $category)
                    <option value="{{ route('filiere.ufr', $category->nom_fil) }}" {{ $slug == $category->nom_fil ? 'selected' : '' }}>{{ $category->nom_ufr }}</option>
                @endforeach</select>
        </div>
        <a class="button is-info" href="{{ route('filieres.create') }}">Créer un film</a>
    </header>