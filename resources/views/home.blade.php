<x-layout>`
    @if($user_type == 'admin')
    <div class='mb-10'>
    <x-admin></x-admin>
    </div>
    
            @if (count($student_infos)>=1)
            <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">
            @foreach($student_infos as $Studentinfo)
            <x-studCard :Studentinfo="$Studentinfo" />
            @endforeach
            </div>
            @else
            <p class='text-center'>No student found</p>
            @endif      
            <div class="mt-6 p-4">
                {{$student_infos->links()}}
            </div>
    @endif
</x-layout>