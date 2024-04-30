
<x-master title="">
           

	             

	
	  <button id="openModalBtn"  class="btn btn-primary">Ajouter team</button>
         
				 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	
	<thead>
		
		<tr>
			<th>ID</th>
			<th>nom</th>
			<th>specialites</th>
			<th>image</th>
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
			<td>{{$team->id}}</td>

            <td>{{$team->nomComplete}}</td>
            <td>{{$team->specialites}}</td>
            <td><img src="{{asset('images/'.$team->image)}}" class="img-fluid" width="30px"  ></td>
            <td>{{$team->linkfacebook}}</td>
            <td>{{$team->linktwitter}}</td>
         
            <td>{{$team->linklinkedin}}</td>


			<td>{{$team->linkinstagram}}</td>
			<td>
				{{-- <button type="button"  class="btn btn-warning" ><i class="bi bi-pencil"></i>
				</button> --}}
				<form action="{{route('teams.edit',$team->id)}}" method="GET">
					@csrf
				 @method('GET')
					<button class="btn btn-primary btn-sm float-end mx-2" id="Editbtn" >Modifier</button>
				  </form>
				
					<button style="display: none">
				<form  action="{{ route('teams.destroy', $team->id ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>	</button>
						
					
				
				</td>
		</tr>
		
	</tbody>
	@endforeach
</table>

      {{-- @include('teams.edit') --}}
 <div id="myModal" class="modal"></div>

	<!-- Modal content -->
	<div class="modal-content">
	  <span class="close">&times;</span>
	  
	  <form action="{{ route('teams.create') }}" method="POST" enctype="multipart/form-data">
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
		</form></div>
		<button type="submit" class="btn btn-primary">Ajouter</button>
	
	
	</div>
  
  </div>
 

 





</x-master>