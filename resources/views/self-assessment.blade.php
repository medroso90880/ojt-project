<x-layout>
    @if ($user_type== 'admin')
        <div class='fixed top-0 left-0 right-0 bg-white border'>
            <x-admin></x-admin>
            <x-nav :studentinfo="$social_bg" :user="$user_type"/>
        </div>
        <div class='mt-48'>
            <x-self-assessment :studentinfo="$self_assessment"></x-self-assessment>
        </div>
        <div class='mt-12'>
            <x-social-bg :studentinfo="$social_bg"></x-social-bg>
        </div>
        <div class= 'mt-12'> 
            <x-vocational :studentinfo="$vocational"></x-vocational>
        </div>
        @elseif ($user_type== 'student')
        <div class='fixed top-0 left-0 right-0 bg-white border'>
            <x-admin></x-admin>
            <x-nav :studentinfo="$social_bg" :user="$user_type"/>
        </div>
        <div class='mt-48'>
            <x-self-assessment :studentinfo="$self_assessment"></x-self-assessment>
        </div>
        <div class='mt-12'>
            <x-social-bg :studentinfo="$social_bg"></x-social-bg>
        </div>
        <div class= 'mt-12'> 
            <x-vocational :studentinfo="$vocational"></x-vocational>
        </div>
        <div class='flex flex-col items-center mt-4'>
            <button  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
               <a href='/student/edit/personal-info/{{ $social_bg }}'> Edit</a>
              </button>
        </div>
    @endif
</x-layout>