<x-layout>
    @if($user_type== 'admin')   
        <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :Studentinfo="$studentinfo" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-personal-info :studentinfo="$studentinfo"></x-personal-info>
        </div>
        <div class='mt-12'>
            <x-family-bg :familyinfo="$familyinfo"></x-family-bg>
        </div>
        <div class='mt-12'>
            <x-residence :residence="$residence"></x-residence>
        </div>
    @elseif($user_type== 'student')
        @if($studentinfo == null)
        <div class='fixed top-0 left-0 right-0 bg-white border'>
            <div class="container mx-auto px-6 py-1">
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                    STUDENT RECORDS
                </div>
            </div>
            <x-nav :Studentinfo="$user_id" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-input-personal-info :studentinfo="$studentinfo"></x-input-personal-info>
        </div>
        <div class= 'mt-12'> 
            <x-input-family-bg :studentinfo="$studentinfo"></x-input-family-bg>
        </div>
            
        @else
            <div class='fixed top-0 left-0 right-0 bg-white border'>
                <div class="container mx-auto px-6 py-1">
                    <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                        STUDENT RECORDS
                    </div>
                </div>
            <x-nav :Studentinfo="$studentinfo" :user="$user_type"/>
            </div>
            <div class= 'mt-24'> 
                <x-personal-info :studentinfo="$studentinfo"></x-personal-info>
            </div>
            <div class='mt-12'>
                <x-family-bg :familyinfo="$familyinfo"></x-family-bg>
            </div>
            <div class='mt-12'>
                <x-residence :residence="$residence"></x-residence>
            </div>
            <div class='flex flex-col items-center mt-4'>
                <button  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                   <a href='/student/edit/personal-info/'> Edit</a>
                  </button>
            </div>
        @endif
    @endif
</x-layout>
