<x-master title="update page">
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



	<!-- Modal content -->
	
	
	  <span class="closeedit" >&times;</span>
	
	 
		<form  method="POST" action="{{ route('teams.update',$team->id) }}"  id="editForm" enctype="multipart/form-data">

      @csrf
      @method('PUT')
		<div class="form-group">
			<input type="hidden" name="id" id="edit-id">
               <input type="hidden" id="formateurId" value="">
			<label for="nom">Nom Complete</label>
			<input type="text" class="form-control" id="nomComplete"  placeholder="Nom Complet" name="nomComplete" value=" {{$team->nomComplete}}" >
		
		</div>
		<div class="form-group">
			<label for="specialites">Spécialités</label>
			<input type="text" class="form-control" id="specialites"  placeholder="Spécialités" name="specialites" value="{{$team->specialites}}">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" id="image" name="image">
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="facebook"><i class="bi bi-facebook"></i> Lien Facebook</label>
				<input type="text" class="form-control" id="facebook" name="linkfacebook" value="{{$team->linkfacebook}}">
			</div>
			<div class="form-group col-md-4">
				<label for="twitter"><i class="bi bi-twitter"></i> Lien Twitter</label>
				<input type="text" class="form-control" id="twitter" name="linktwitter" value="{{$team->linktwitter}}">
			</div>
			
			<div class="form-group col-md-4">
				<label for="linkedin"><i class="bi bi-linkedin"></i> Lien LinkedIn</label>
			<input type="text" class="form-control" id="linkedin" name="linklinkedin" value="{{$team->linklinkedin}}">

			
			</div>
		</div>
		<div class="form-group">
			<label for="instagram"><i class="bi bi-instagram"></i> Lien Instagram</label>
				<input type="text" class="form-control" id="instagram" name="linkinstagram" value="{{$team->linkinstagram}}">
		</div>
		<button type="submit" class="btn btn-primary">Modifier</button>
		
	</form>
	
	
</x-master>