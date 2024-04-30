
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
<hr>
    <h1> Details formation</h1>
    <fieldset>
<form method="POST" action="{{ route('formation.store') }}">
    @csrf

    <div class="mb-3">
        <label for="course_id" class="form-label">Course:</label>
        
        <select  name="course_id" id="course_id" class="form-control" >

          
            @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->title }}</option>
        @endforeach
            
        </select>
    </div>

    <div class="mb-3">
        <label for="team_id" class="form-label">Team:</label>
        <select name="team_id" id="team_id" class="form-control" >
         
            @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->nomComplete }}</option>
        @endforeach
          
        </select>
    </div class="mb-3">

    <div class="mb-3">
        <label for="date_publication" class="form-label">Date of Publication:</label>
        <input type="datetime-local" name="date_publication" id="date_publication" class="form-control" >
    </div>

    <div class="mb-3">
        <label for="video_link" class="form-label">Video Link:</label>
        <input type="text" name="video_link" id="video_link" class="form-control" >
    </div>

    <button type="submit"  class="btn btn-success">Submit</button>

</form></fieldset>

</x-master>

