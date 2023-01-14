<x-layout>`
    @if($user_type == 'admin')
    <div class='fixed top-0 left-0 right-0 bg-white border'>
    <x-admin></x-admin>
    </div>
    <div class='mt-36'>
            @if (count($student_infos)>=1)
            <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">
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
    </div>
    @endif
</x-layout>