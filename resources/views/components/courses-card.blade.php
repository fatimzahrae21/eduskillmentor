<div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="{{asset('storage/'.$course->image)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$course->title}}</h5>
        <p class="card-text">{{Str::limit($course->description,50,'')}}</p>
        <a href="{{route('courses.show',$course->id)}}" class="stretched-link"></a>
      </div>
  
      <div class="card-foot border-top bg-light px-3 py-3" style="z-index: 9">
        <form action="{{route('courses.destroy',$course->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger btn-sm float-end">Supprimer</button>
        </form>
        <form action="{{route('courses.edit',$course->id)}}" method="GET">
          @csrf
       @method('GET')
          <button class="btn btn-primary btn-sm float-end mx-2">Modifier</button>
        </form>
      </div>
    </div>
  </div>

  {{-- HTML is the standard markup language for creating web pages and web applications.
  PHP is a server-side scripting language used for web development and creating dynamic web pages.
  JavaScript is a programming language that enables interactive web pages and is essential for web development.
  Python is a versatile and easy-to-learn programming language used for web development, data analysis, and more.
  OOP is a programming paradigm based on the concept of "objects," which can contain data and code: data in the form of fields (often known as attributes or properties), and code in the form of procedures (often known as methods). --}}