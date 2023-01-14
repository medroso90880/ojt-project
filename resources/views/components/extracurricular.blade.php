<div>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        EXTRA CURRICULAR ACTIVITIES
    </h2>
</header>

    @php
    $grade_level = 0;
    $positions = explode(',',$studentinfo->position ); 
    $org_clubs = explode(',',$studentinfo->org_club );
    $activities = explode(',',$studentinfo->activity );
    $extent_activities = explode(',',$studentinfo->extent_activity );
    $nature_1involvements = explode(',',$studentinfo->nature_1involvement);
    $awards = explode(',',$studentinfo->award );
    $activity_competitions = explode(',',$studentinfo->activity_competition );
    $classifications = explode(',',$studentinfo->classification );
    $titles = explode(',',$studentinfo->title );
    $sponsors = explode(',',$studentinfo->sponsor );
    $scopes = explode(',',$studentinfo->scope );
    $nature_2involvements = explode(',',$studentinfo->nature_2involvement);
    $count = 0 ; 
    @endphp
    <div class='mb-6 flex flex-col items-center'>
        <h2 class='font-bold'>POSITION HELD IN SCHOOL/OFF-CAMPUS ORGANIZATIONS</h2>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
                <tr>
                <th class ="border border-gray-600"></th>
                @for ($grade_level=7;$grade_level<=12;$grade_level++)
                <th class ="border border-gray-600">Grade {{ $grade_level }}</th>
                @endfor
                </tr>
            </thead>
            <tbody>           
                <tr>
                    <th class ="border border-gray-600">Positions</th>
                    @foreach ($positions as $position)
                    <td class ="border border-gray-600">{{ $position}}</td>
                    @endforeach
                    
                </tr>
                <tr>
                    <th class ="border border-gray-600">Org/Clubs</th>
                    @foreach ( $org_clubs as $org_club )
                    <td class ="border border-gray-600">{{ $org_club }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <div class='mb-6 flex flex-col items-center'>
        <h2 class='font-bold'>INVOLVEMENT IN ACTIVITIES/PROJECTS IN/OFF CAMPUS</h2>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
                <tr>
                <th class ="border border-gray-600"></th>
                @for ($grade_level=7;$grade_level<=12;$grade_level++)
                <th class ="border border-gray-600">Grade {{ $grade_level }}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class ="border border-gray-600">Activity</th>
                    @foreach ( $activities as $activity )
                    <td class ="border border-gray-600">{{ $activity }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Extent of activity</th>
                    @foreach ( $extent_activities as $extent )
                    <td class ="border border-gray-600">{{ $extent }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Nature of involvement</th>
                    @foreach ( $nature_1involvements as $N1 )
                    <td class ="border border-gray-600">{{ $N1 }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class='mb-6 flex flex-col items-center'>
        <h2 class='font-bold'>SPECIAL ACADEMIC HONORS/AWARDS/DISTINCTIONS RECIEVED</h2>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
                <tr>
                <th class ="border border-gray-600"></th>
                @for ($grade_level=7;$grade_level<=12;$grade_level++)
                <th class ="border border-gray-600">Grade {{ $grade_level }}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class ="border border-gray-600">Awards</th>
                    @foreach ( $awards as $award )
                    <td class ="border border-gray-600">{{ $award }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Activity/competition/etc.</th>
                    @foreach ( $activity_competitions as $competition )
                    <td class ="border border-gray-600">{{ $competition }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Classification</th>
                    @foreach ( $classifications as $class )
                    <td class ="border border-gray-600">{{ $class}}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <div class='mb-6 flex flex-col items-center'>
        <h2 class='font-bold'>PARTICIPATION IN SEMINARS/CONFERENCE/CONTESTS/COMPETITIONS</h2>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
                <tr>
                <th class ="border border-gray-600"></th>
                @for ($grade_level=7;$grade_level<=12;$grade_level++)
                <th class ="border border-gray-600">Grade {{ $grade_level }}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class ="border border-gray-600">Title</th>
                    @foreach ( $titles as $title )
                    <td class ="border border-gray-600">{{ $title }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Sponsoring agency/Date held</th>
                    @foreach ( $sponsors as $sponsor )
                    <td class ="border border-gray-600">{{ $sponsor }}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Scope</th>
                    @foreach ( $scopes as $scope )
                    <td class ="border border-gray-600">{{ $scope}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th class ="border border-gray-600">Nature of involvement</th>
                    @foreach ( $nature_2involvements as $N2 )
                    <td class ="border border-gray-600">{{ $N2}}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
