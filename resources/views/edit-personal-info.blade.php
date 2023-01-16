<x-layout>
    <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :Studentinfo="$studentinfo" :user="$user_type"/>
        <div class= 'mt-12'> 
            <x-input-personal-info :studentinfo="$studentinfo"></x-input-personal-info>
        </div>
        <div class= 'mt-12'> 
            <x-input-family-bg :studentinfo="$studentinfo"></x-input-family-bg>
        </div>

</x-layout>