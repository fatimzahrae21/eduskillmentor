{{-- <div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
	  <span class="close">&times;</span>
	  <form action="{{ route('teams.store', $teams->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    
		<div class="form-group">
		  
			<label for="nom">Nom Complete</label>
			<input type="text" class="form-control" id="nom" placeholder="NomComplete">
		
		 
		</div>
		
		<div class="form-group">
			<label class="form-label">
				Spécialités</label>
			<input type="text" name="image" class="form-control" name="specialites">
		</div>
		<div class="form-row">
		  <div class="form-group col-md-4">
			<label for="facebook"><a href="#"><i class="bi bi-facebook"></i></a> lien facebook</label>
			<input type="text" class="form-control" id="inputCity"name="linkfacebook">
		  </div>
		  <div class="form-group col-md-2">
			<label for="twitterlink"> 	<a href="#"><i class="bi bi-twitter"></i></a> lien twitter</label>
			<input type="text" class="form-control" id="twitterlink"name="linktwitter">
		  </div>
		  <div class="form-group col-md-4">
			<label for="linkinsta"><a href="#"><i class="bi bi-instagram"></i></a> lien instagram</label>
			<input type="text" class="form-control" id="linkinsta" name="linkinstagram">
		  </div>
		  <div class="form-group col-md-2">
			<label for="linkdin">
				<a href="#"><i class="bi bi-linkedin"></i></a> lien linkdin</label>
			<input type="text" class="form-control" id="linkdin" name="linklinkdin">
		  </div>
		</div>
		
		
		
		<button type="submit" class="btn btn-primary">Ajouter</button>
	  </form>
	</div>
  
  </div> --}}
  {{-- <x-master title="infos page"> --}}
  {{-- <div id="myModal" class="modal"></div> --}}

	<!-- Modal content -->
	{{-- <div class="modal-content">
	  <span class="close">&times;</span> --}}
{{-- 	  
	  <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nom">Nom Complete</label>
			<input type="text" class="form-control" placeholder="Nom Complet" name="nomComplete">
		</div>
		<div class="form-group">
			<label for="specialites">Spécialités</label>
			<input type="text" class="form-control"  placeholder="Spécialités" name="specialites">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" id="image" name="image">
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="facebook"><i class="bi bi-facebook"></i> Lien Facebook</label>
				<input type="text" class="form-control"  name="linkfacebook">
			</div>
			<div class="form-group col-md-4">
				<label for="twitter"><i class="bi bi-twitter"></i> Lien Twitter</label>
				<input type="text" class="form-control"  name="linktwitter">
			</div> --}}
			{{-- <div class="form-group col-md-4">
				<label for="instagram"><i class="bi bi-instagram"></i> Lien Instagram</label>
				<input type="text" class="form-control"  name="linkinstagram">
			</div>
		</div> --}}
		{{-- <div class="form-group">
			<label for="linkedin"><i class="bi bi-linkedin"></i> Lien LinkedIn</label>
			<input type="text" class="form-control" name="linklinkedin">
		</form></div>
		<button type="submit" class="btn btn-primary">Ajouter</button>
	 --}}
	
	{{-- </div>
  
  </div> --}}
  {{-- </x-master> --}}
  <x-master title="infos page">

    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Nom Complete</label>
            <input type="text" class="form-control" placeholder="Nom Complet" name="nomComplete">
        </div>
        <div class="form-group">
            <label for="specialites">Spécialités</label>
            <input type="text" class="form-control"  placeholder="Spécialités" name="specialites">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="facebook"><i class="bi bi-facebook"></i> Lien Facebook</label>
                <input type="text" class="form-control"  name="linkfacebook">
            </div>
            <div class="form-group col-md-4">
                <label for="twitter"><i class="bi bi-twitter"></i> Lien Twitter</label>
                <input type="text" class="form-control"  name="linktwitter">
            </div>
            <div class="form-group col-md-4">
                <label for="instagram"><i class="bi bi-instagram"></i> Lien Instagram</label>
                <input type="text" class="form-control"  name="linkinstagram">
            </div>
        </div>
        <div class="form-group">
            <label for="linkedin"><i class="bi bi-linkedin"></i> Lien LinkedIn</label>
            <input type="text" class="form-control" name="linklinkedin">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</x-master>
