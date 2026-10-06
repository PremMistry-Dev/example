<x-layout>

    <x-slot:heading>Job Details</x-slot:heading>
    <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
    <p>Salary: ${{ $job['salary'] }}</p>
    <p>Description: {{ $job['description'] }}</p>
  

</x-layout>