
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
	@foreach ($teams as $team)
	<tbody>
		<tr>
			<td>{{$team->nomComplete}}</td>
			<td>{{$team->specialites}}</td>
			<td>{{$team->linkfacebook}}</td>
			<td>{{$team->linktwitter}}</td>
			<td>{{$team->linklinkdin}}</td>
			<td>{{$team->linkinstgram}}</td>
			<td>
				<button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i>
				</button>
				
					
						
						<button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
					
				
				</td>
		</tr>
		
	</tbody>
	@endforeach
</table>
      
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
	  <span class="close">&times;</span>
	  <form action="{{ route('teams.store', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
		<div class="form-group">
		  
			<label for="nom">Nom Complete</label>
			<input type="text" class="form-control" id="nom" placeholder="nom Complete" name="nomComplete">
		
		 
		</div>
		
		<div class="form-group">
			<label class="form-label">
				Spécialités</label>
			<input type="text" name="specialites" class="form-control" >
		</div>
		
		<div class="form-row">
		  <div class="form-group col-md-4">
			<label for="facebook"><a href="#"><i class="bi bi-facebook"></i></a> lien facebook</label>
			<input type="text" class="form-control" id="inputCity" name="linkfacebook">
		  </div>
		  <div class="form-group col-md-2">
			<label for="twitterlink"> 	<a href="#"><i class="bi bi-twitter"></i></a> lien twitter</label>
			<input type="text" class="form-control" id="twitterlink" name="linktwitter">
		  </div>
		  <div class="form-group col-md-4">
			<label for="linkinsta"><a href="#"><i class="bi bi-instagram"></i></a> lien instagram</label>
			<input type="text" class="form-control" id="linkinsta" name="linkinstgram">
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


</x-master>