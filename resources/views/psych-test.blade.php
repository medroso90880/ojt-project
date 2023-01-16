<x-layout>
    @if($user_type== 'admin')   
        <div class='fixed top-0 left-0 right-0 bg-white border'>
        <x-admin></x-admin>
        <x-nav :studentinfo="$psychtest" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-psych-test :studentinfo="$psychtest"></x-psych-test>
        </div>
    @elseif($user_type== 'student')   
    <div class='fixed top-0 left-0 right-0 bg-white border'>
    <x-admin></x-admin>
    <x-nav :studentinfo="$psychtest" :user="$user_type"/>
    </div>
    <div class= 'mt-48'> 
        <x-psych-test :studentinfo="$psychtest"></x-psych-test>
    </div>
@endif
</x-layout>