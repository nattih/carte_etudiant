




<form action="{{ route('filieres.store') }}" method="POST">
    @csrf
    <div class="field">
                        <label class="label">filiere</label>
                        <div class="control">
                          <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('id   ') }}" placeholder="nom de votre filiere">
                        </div>
    <div class="field">
        <label class="label">ufr</label>
        <div class="select">
            <select name="ufr_id">
                @foreach($ufrs as $category)
                    <option value="{{ $category->id }}">{{ $category->nom_ufr }}</option>
                @endforeach
            </select>
            
        </div>
        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
    </div>