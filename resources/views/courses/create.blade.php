
<x-master title="infos page">
    <h3>Create cours</h3>

@if ($errors->any())
<x-alert type="danger">
    <h6>Errors :</h6>
    <ul> 
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</x-alert>
@endif

<form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" name="title" class="form-control">
        @error('title')
        <div class="text-danger">
            {{$message}}
        </div>
            
        @enderror
    
    </div>
    <div class="mb-3">
        <label class="form-label">Dureé</label>
        <input type="text" name="dureé" class="form-control">
        @error('dureé')
            <div class="text-danger">
                {{$message}}
            </div>
@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" name="prix" class="form-control" >
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea type="text" name="description" class="form-control" ></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image de formation</label>
        <input type="file" name="image" class="form-control" >
    </div>
    <button type="submit" class="btn btn-success">Ajouter cours</button>
</form>
</x-master>

