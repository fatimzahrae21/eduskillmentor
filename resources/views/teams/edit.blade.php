<div id="myModaledit" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
	  <span class="closeedit" >&times;</span>
	  
	 
		<form action="{{ route('formateurs.update', '') }}/" method="POST" id="editForm" enctype="multipart/form-data">

      @csrf
      @method('PUT')
		<div class="form-group">
               <input type="hidden" id="formateurId" value="">
			<label for="nom">Nom Complete</label>
			<input type="text" class="form-control" id="nomCompletef"  placeholder="Nom Complet" name="nomComplete">
		
		</div>
		<div class="form-group">
			<label for="specialites">Spécialités</label>
			<input type="text" class="form-control" id="specialitesInput" value="" placeholder="Spécialités" name="specialites">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" id="image" name="image">
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="facebook"><i class="bi bi-facebook"></i> Lien Facebook</label>
				<input type="text" class="form-control" id="facebook" name="linkfacebook">
			</div>
			<div class="form-group col-md-4">
				<label for="twitter"><i class="bi bi-twitter"></i> Lien Twitter</label>
				<input type="text" class="form-control" id="twitter" name="linktwitter">
			</div>
			<div class="form-group col-md-4">
				<label for="instagram"><i class="bi bi-instagram"></i> Lien Instagram</label>
				<input type="text" class="form-control" id="instagram" name="linkinstagram">
			</div>
		</div>
		<div class="form-group">
			<label for="linkedin"><i class="bi bi-linkedin"></i> Lien LinkedIn</label>
			<input type="text" class="form-control" id="linkedin" name="linklinkedin">
		</div>
		<button type="submit" class="btn btn-primary">Ajouter</button>
	</form>
	
	</div>
  
  </div>