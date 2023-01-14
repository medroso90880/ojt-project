@props(['studentinfo'])

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="px-4 pt-4">
    </div>
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{$studentinfo->picture ? asset('storage/' . $studentinfo->picture) : asset('images/profile.jpg')}}"
        alt=""/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"> <a href="/student-info/{{ $studentinfo->id }}">{{$studentinfo->first_name}} {{$studentinfo->last_name}}</a></h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $studentinfo->id }}</span>
    </div>
</div>