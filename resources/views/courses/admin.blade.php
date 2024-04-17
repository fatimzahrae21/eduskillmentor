
<x-master title="Course page">

    <h3>Cources</h3>
    
    <div class="row my-4">

        @foreach ($courses as $course)
            <x-courses-card :course="$course"/>   
        @endforeach
    
      </div>
    
    
    </x-master>