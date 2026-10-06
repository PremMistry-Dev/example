<x-layout>

    <x-slot:heading>Jobs Page</x-slot:heading>
    @foreach ($jobs as $job)
     <ul>
          <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-black-500 hover:underline">
            <strong>{{ $job['title'] }}</strong> pays ${{ $job['salary'] }}, here is the description, {{ $job['description'] }}
</a>
        </li>
        <br>
     </ul>
      
       
    @endforeach

</x-layout>