<x-layout>
    @if($user_type== 'admin')   
        <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :studentinfo="$counselor" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-counselor-notes :counselor="$counselor"></x-counselor-notes>
        </div>
    @elseif($user_type== 'student')   
    <div class='fixed top-0 left-0 right-0 bg-white border'>
    <x-admin></x-admin>
    <x-nav :studentinfo="$counselor" :user="$user_type"/>
    </div>
    <div class= 'mt-48'> 
        <x-counselor-notes :counselor="$counselor"></x-counselor-notes>
    </div>
@endif
</x-layout>