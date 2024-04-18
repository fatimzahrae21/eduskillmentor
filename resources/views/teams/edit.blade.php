<x-master title="update page">
    <h3>Modifier formateur</h3>

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

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
      <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')>
            <div class="form-group">
              
                <label for="nom">Nom Complete</label>
                <input type="text" class="form-control" id="nom" placeholder="nomComplete"
                name="nomComplete">
            
             
            </div>
            
            <div class="form-group">
                <label class="form-label">
                    Spécialités</label>
                <input type="text" name="specialites" class="form-control" >
            </div>
            <div class="form-group">
                <label class="form-label">Image de formateur</label>
                <input type="file" name="image" class="form-control" >
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="facebook"><a href="#"><i class="bi bi-facebook"></i></a> lien facebook</label>
                <input type="text" class="form-control" id="inputCity" name="link facebook">
              </div>
              <div class="form-group col-md-2">
                <label for="twitterlink"> 	<a href="#"><i class="bi bi-twitter"></i></a> lien twitter</label>
                <input type="text" class="form-control" id="twitterlink" name="link twitter">
              </div>
              <div class="form-group col-md-4">
                <label for="linkinsta"><a href="#"><i class="bi bi-instagram"></i></a> lien instagram</label>
                <input type="text" class="form-control" id="linkinsta" name="link instgram">
              </div>
              <div class="form-group col-md-2">
                <label for="linkdin">
                    <a href="#"><i class="bi bi-linkedin"></i></a> lien linkdin</label>
                <input type="text" class="form-control" id="linkdin" name="link linkdin" >
              </div>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
        </div>
      
      </div>
</x-master>
