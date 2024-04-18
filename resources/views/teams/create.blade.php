<div id="myModal" class="modal">

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
  
  </div>