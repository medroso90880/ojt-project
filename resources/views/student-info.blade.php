<x-layout>
    @if($user_type== 'admin')
        <x-admin></x-admin>
        <x-nav :Studentinfo="$studentinfo" :user="$user_type"/>
        <x-card>
            <x-personal-info :studentinfo="$studentinfo"/>
        </x-card>
    @endif
</x-layout>
