@props(['studentinfo','user'])
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
    </div>
</nav>