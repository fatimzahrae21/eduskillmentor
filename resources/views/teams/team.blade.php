
<x-master title="infos page">
           

	             

	
	  <button id="openModalBtn"  class="btn btn-primary">Ajouter team</button>
         
				 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	
	<thead>
		
		<tr>
			<th>nom</th>
			<th>specialites</th>
			<th>link facebook</th>
			<th>link twitter</th>
			<th>link linkdin</th>
			<th>link instagram</th>
			<th>action</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>souad el maazouzi</td>
			<td>full stack devoloper</td>
			<td>ghjk</td>
			<td>hjk</td>
			<td>hvhj</td>
			<td>jhiuhilj</td>
			<td>
				<button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i>
				</button>
				
					
						
						<button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
					
				
				</td>
		</tr>
		
	</tbody>
</table>
      
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
	  <span class="close">&times;</span>
	  <form>
		<div class="form-group">
		  
			<label for="nom">NOM</label>
			<input type="text" class="form-control" id="nom" placeholder="Email">
		
		 
		</div>
		
		<div class="form-group">
			<label class="form-label">
				Spécialités</label>
			<input type="text" name="image" class="form-control" >
		</div>
		<div class="form-group">
			<label class="form-label">Image de formateur</label>
			<input type="file" name="image" class="form-control" >
		</div>
		<div class="form-row">
		  <div class="form-group col-md-4">
			<label for="facebook"><a href="#"><i class="bi bi-facebook"></i></a> lien facebook</label>
			<input type="text" class="form-control" id="inputCity">
		  </div>
		  <div class="form-group col-md-2">
			<label for="twitterlink"> 	<a href="#"><i class="bi bi-twitter"></i></a> lien twitter</label>
			<input type="text" class="form-control" id="twitterlink">
		  </div>
		  <div class="form-group col-md-4">
			<label for="linkinsta"><a href="#"><i class="bi bi-instagram"></i></a> lien instagram</label>
			<input type="text" class="form-control" id="linkinsta">
		  </div>
		  <div class="form-group col-md-2">
			<label for="linkdin">
				<a href="#"><i class="bi bi-linkedin"></i></a> lien linkdin</label>
			<input type="text" class="form-control" id="linkdin">
		  </div>
		</div>
		
		
		
		<button type="submit" class="btn btn-primary">Ajouter</button>
	  </form>
	</div>
  
  </div>


</x-master>