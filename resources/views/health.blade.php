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
</x-layout>