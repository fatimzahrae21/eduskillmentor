<x-master title="update page">
    <h3>Modifier Course</h3>

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

    <form action="{{ route('courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Dureé</label>
            <input type="text" name="dureé" class="form-control" value="{{ old('dureé', $course->dureé) }}">
            @error('dureé')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" value="{{ old('prix', $course->prix) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $course->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image de formation</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Modifier course</button>
    </form>
</x-master>
