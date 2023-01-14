<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        EDUCATION BACKGROUND
    </h2>
</header>
    <div class=" text-center">
        <div class="mb-2">
            <label class = "font-bold">Last School Attended: </label>
            <label >{{ $studentinfo->school_last_attended }}</label>,
            <label class = "font-bold">{{ $studentinfo->public_or_private }}</label>
        </div>
        <div class="mb-2">
            <label class = "font-bold">School Address: </label>
            <label >{{ $studentinfo->school_address }}</label>,
            <label class = "font-bold">{{ $studentinfo->coed_or_exclusive }}</label>
        </div>
        <div class="mb-2">
            <label class = "font-bold">Honors/Awards Received: </label>
            <label >{{ $studentinfo->secretarian_or_nonsect}}</label>,
            <label class = "font-bold">{{ $studentinfo->secretarian_or_nonsect }}</label>
        </div>
        @php
        $count = 0;
        $grade_levels = explode(',',$studentinfo->grade_level ); 
        $sections = explode(',',$studentinfo->section );
        $scholarship_stats = explode(',',$studentinfo->scholarship_status );
        $academic_stats = explode(',',$studentinfo->academic_status );
        @endphp
          <div class='flex flex-col items-center'>
            <table class="table-auto border-spacing-0 border-gray-600">
                <thead>
                  <tr>
                    <th class ="border border-gray-600">Grade Level</th>
                    <th class ="border border-gray-600">Section</th>
                    <th class ="border border-gray-600">Scholarship Status</th>
                    <th class ="border border-gray-600">Academic Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($grade_levels as $grade)      
                    <tr>
                      <td class ="border border-gray-600">{{ $grade}}</td>
                      <td class ="border border-gray-600">{{ $sections[$count] }}</td>
                      <td class ="border border-gray-600">{{ $scholarship_stats[$count] }}</td>
                      <td class ="border border-gray-600">{{ $academic_stats[$count] }}</td>
                    </tr>
                  @php
                      $count++;
                  @endphp
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @php
    $grade_levels = explode(',',$studentinfo->grade_level ); 
    $count = 0 ;
    $bests = explode(',',$studentinfo->subject_like_best ); 
    $leasts = explode(',',$studentinfo->subject_like_least );
    $difficults = explode(',',$studentinfo->subject_find_difficult );
    $learned_mosts = explode(',',$studentinfo->subject_learned_most);
    $learned_leasts = explode(',',$studentinfo->subject_learned_least);
    $taught_bests = explode(',',$studentinfo->subject_taught_best);
    $taught_worsts = explode(',',$studentinfo->subject_taught_worst);
    @endphp
    <div class='mt-6 flex flex-col items-center'>
    <table class="table-auto border-spacing-0 border-gray-600">
        <thead>
            <tr>
                <th class ="border border-gray-600"></th>
            @foreach ($grade_levels as $grade)
                <th class ="border border-gray-600">Grade {{$grade}}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>     
            <tr>
                <th class ="border border-gray-600">Subject liked best</th>
                @foreach ($bests as $best)
                    <td class ="border border-gray-600">{{ $best }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject liked least</th>
                @foreach ($leasts as $least)
                    <td class ="border border-gray-600">{{ $least }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject find difficult</th>
                @foreach ($difficults as $difficult)
                    <td class ="border border-gray-600">{{ $difficult }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject learned most</th>
                @foreach ($learned_mosts as $learned_most)
                    <td class ="border border-gray-600">{{ $learned_most }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject learned least</th>
                @foreach ($learned_leasts as $learned_least)
                    <td class ="border border-gray-600">{{ $learned_least }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject taught best</th>
                @foreach ($taught_bests as $taught_best)
                    <td class ="border border-gray-600">{{ $taught_best }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Subject taught worst</th>
                @foreach ($taught_worsts as $taught_worst)
                    <td class ="border border-gray-600">{{ $taught_worst }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
    </div>
</div>
