@props(['studentinfo','user'])
@if ($user=='admin')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a>
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a>
    </div>
</nav>
@elseif ($user=='guidance counselor')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- R-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- R  -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/psych-test/{{ $studentinfo->id }}">Psych Test</a> <!-- CRUD-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- CRUD -->
    </div>
</nav>
@elseif ($user=='guidance asssitant')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- R-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- R  -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/psych-test/{{ $studentinfo->id }}">Psych Test</a> <!-- R-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- R -->
    </div>
</nav>
@elseif ($user=='registrar')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- R-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- R  -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- R -->
    </div>
</nav>
@elseif ($user=='registrar assistant')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  R -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- R-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- R  -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- R -->
    </div>
</nav>
@elseif ($user=='do')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- view and create -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  view and create -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- view and create -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- view and create -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- view -->
    </div>
</nav>
@elseif ($user=='student')
<nav class="sm:flex sm:justify-center sm:items-center mt-4">
    <div class="flex flex-col sm:flex-row">
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/{{ $studentinfo->id }}">Personal Info.</a><!-- view and create update-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-health/{{ $studentinfo->id }}">Health</a> <!--  view and create update-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-educational-background/{{ $studentinfo->id }}">Education</a> <!-- view and create update-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/self-assessment/{{ $studentinfo->id }}">Self Assessment</a> <!-- view and create update-->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/psych-test/{{ $studentinfo->id }}">Psych Test</a> <!-- view -->
        <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="/student-info/counselors-notes/{{ $studentinfo->id }}">Counselor's Notes</a> <!-- view -->
    </div>
</nav>
@endif
