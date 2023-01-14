<x-layout>
    @if ($user_type== 'admin')
        <div class='fixed top-0 left-0 right-0 bg-white border'>
            <x-admin></x-admin>
            <x-nav :studentinfo="$educational_bg" :user="$user_type"/>
        </div>
        <div class= 'mt-48'> 
            <x-educational-bg :studentinfo="$educational_bg"></x-educational-bg>
        </div>
        <div class='mt-12'>
            <x-extracurricular :studentinfo="$extracu"></x-extracurricular>
        </div>
    @endif
</x-layout>