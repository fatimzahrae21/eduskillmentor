
<x-master title="infos page">
   

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


<form method="POST" action="{{ route('contenu.store') }}">
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
        <label class="form-label">Centenu</label>
        <textarea type="text" name="content" class="form-control" ></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" >
        </div>
    <div class="mb-3">
        <label class="form-label">Introduction</label>
        <textarea type="text" name="introduction" class="form-control" ></textarea>
    </div>

    <div class="mb-3">
        <label for="team_id" class="form-label">Team:</label>
        <select name="team_id" id="team_id" class="form-control" >
         
            @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->nomComplete }}</option>
        @endforeach
          
        </select>
    <div class="mb-3">
    <div class="mb-3">
        <label class="form-label">Image de formation</label>
        <input type="file" name="image" class="form-control" >
    </div>
    

    <button type="submit"  class="btn btn-success">Ajouter</button>

</form></fieldset>

</x-master>

