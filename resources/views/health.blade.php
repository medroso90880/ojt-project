<x-layout>
    @if ($user_type== 'admin')
        <div class='fixed top-0 left-0 right-0 bg-white border'>
            <x-admin></x-admin>
            <x-nav :studentinfo="$studentinfo" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-health :studentinfo="$studentinfo"></x-health>
        </div>
    @endif
    @if ($user_type== 'student')
    <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :studentinfo="$studentinfo" :user="$user_type"/>
    </div>
    <div class= 'mt-48'> 
        <x-health :studentinfo="$studentinfo"></x-health>
    </div>
    <div class='flex flex-col items-center mt-4'>
        <button  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
           <a href='/student/edit/personal-info/{{ $studentinfo }}'> Edit</a>
          </button>
    </div>
@endif
</x-layout>