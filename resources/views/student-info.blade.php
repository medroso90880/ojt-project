<x-layout>
    @if($user_type== 'admin')   
        <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :Studentinfo="$studentinfo" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-personal-info :studentinfo="$studentinfo"></x-personal-info>
        </div>
        <div>
            <x-family-bg :familyinfo="$familyinfo"></x-family-bg>
        </div>
    @endif
</x-layout>
