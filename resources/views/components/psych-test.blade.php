<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            PSYCHOLOGICAL TEST PROFILE
        </h2>
    </header>
    @php
    $DIQs = explode('.,',$studentinfo->DIQ);
    $raw_scores = explode('.,',$studentinfo->raw_score);
    $percentiles = explode('.,',$studentinfo->percentile);
    $VAs = explode('.,',$studentinfo->VA);
    $NAs = explode('.,',$studentinfo->NA);
    $VR_NAs = explode('.,',$studentinfo->VR_NA);
    $ARs = explode('.,',$studentinfo->AR);
    $MRs = explode('.,',$studentinfo->MR);
    $SRs = explode('.,',$studentinfo->SR);
    $Ss = explode('.,',$studentinfo->S);
    $Ls = explode('.,',$studentinfo->L);
    $delay_avoidances = explode('.,',$studentinfo->delay_avoidance);
    $work_methods = explode('.,',$studentinfo->work_methods);
    $study_habits = explode('.,',$studentinfo->study_habits); 
    $teacher_approvals = explode('.,',$studentinfo->teacher_approval);
    $educ_acceptances = explode('.,',$studentinfo->educ_acceptance);
    $study_attitudes  = explode('.,',$studentinfo->study_attitude);
    $study_orientations = explode('.,',$studentinfo->study_orientation);
    @endphp
    <div class="flex flex-col items-center">
    <div class = 'mb-12'>
        <label class="font-bold">MENTAL ABILITY</label>

        <table class="table-auto border-spacing-0 border-gray-600">
        <thead>
            <tr>
                <th class ="border border-gray-600"></th>
                <th class ="border border-gray-600">Culture Fair</th>
                <th class ="border border-gray-600">OLMAT</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <th class ="border border-gray-600">Raw Score</th>
                @foreach ($raw_scores as $raw_score )
                <td class ="border border-gray-600">{{ $raw_score }}</td>
                @endforeach
                
            </tr>
            <tr>
                <th class ="border border-gray-600">DIQ</th>
                @foreach ($DIQs as $DIQ )
                <td class ="border border-gray-600">{{ $DIQ}}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">%ile</th>
                @foreach ($percentiles as $percentile )
                <td class ="border border-gray-600">{{ $percentile }}</td>
                @endforeach
            </tr>
        </tbody>
        </table>
    </div>
    <div class = 'mb-12'>
        <label class="font-bold ">APTITUDE</label>
        <table class="table-fixed border-spacing-0 mt-2 border-gray-600">
        <thead>
            <tr>
                <th class ="border border-gray-600"></th>
                <th class ="border border-gray-600">Raw Score</th>
                <th class ="border border-gray-600">Percentile</th>
                <th class ="border border-gray-600">Description</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <th class ="border border-gray-600">VA</th>
                @foreach ($VAs as $VA )
                <td class ="border border-gray-600">{{ $VA }}</td>
                @endforeach
                
            </tr>
            <tr>
                <th class ="border border-gray-600">NA</th>
                @foreach ($NAs as $NA )
                <td class ="border border-gray-600">{{ $NA }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">VR-NA</th>
                @foreach ($VR_NAs as $VR_NA )
                <td class ="border border-gray-600">{{ $VR_NA }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">AR</th>
                @foreach ($ARs as $AR )
                <td class ="border border-gray-600">{{ $AR }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">MR</th>
                @foreach ($MRs as $MR )
                <td class ="border border-gray-600">{{ $MR }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">SR</th>
                @foreach ($SRs as $SR )
                <td class ="border border-gray-600">{{ $SR }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">S</th>
                @foreach ($Ss as $S )
                <td class ="border border-gray-600">{{ $S }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">L</th>
                @foreach ($Ls as $L)
                <td class ="border border-gray-600">{{ $L }}</td>
                @endforeach
            </tr>
        </tbody>
        </table>
    </div>
    <div class = 'mb-12'>
        <label class="font-bold">Study Habits and Attitudes</label>
        <table class="table-fixed border-spacing-0 mt-2 border-gray-600">
        <thead>
            <tr>
                <th class ="border border-gray-600"></th>
                <th class ="border border-gray-600">Raw Score</th>
                <th class ="border border-gray-600">Percentile</th>
                <th class ="border border-gray-600">Description</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <th class ="border border-gray-600">Delay Avoidance</th>
                @foreach ($delay_avoidances as $delay_avoidance )
                <td class ="border border-gray-600">{{ $delay_avoidance }}</td>
                @endforeach
                
            </tr>
            <tr>
                <th class ="border border-gray-600">Work Methods</th>
                @foreach ($work_methods as $work )
                <td class ="border border-gray-600">{{ $work }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Study Habits</th>
                @foreach ($study_habits as $studhabit )
                <td class ="border border-gray-600">{{ $studhabit }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Teacher Approval</th>
                @foreach ($teacher_approvals as $approval )
                <td class ="border border-gray-600">{{ $approval }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Education Acceptance</th>
                @foreach ($educ_acceptances as $acc )
                <td class ="border border-gray-600">{{ $acc }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Study Attitude</th>
                @foreach ($study_attitudes as $sat )
                <td class ="border border-gray-600">{{ $sat }}</td>
                @endforeach
            </tr>
            <tr>
                <th class ="border border-gray-600">Study Orientation</th>
                @foreach ($study_orientations as $so )
                <td class ="border border-gray-600">{{ $so }}</td>
                @endforeach
            </tr>
        </tbody>
        </table>
    </div>
    <div class = 'mb-12'>
        <label class="font-bold">PERSONALITY</label>
        <table class="table-fixed text-center mt-2 border-spacing-0 border-gray-600">
        <thead>
            <tr>
                <th class ="border border-gray-600">Low Score Description</th>
                <th class ="border border-gray-600">1 2 3 4 5 6 7 8 9 10</th>
                <th class ="border border-gray-600">High Score Description</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <th class ="border w-80 border-gray-600">RESERVED, detached, critical, cool</th>
                <td class ="border border-gray-600">{{ $studentinfo->reseve }}</td>
                <th class ="border w-80 border-gray-600">OUTGOING, warmhearted, easy-going, participating</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">LESS INTELEGENT, concrete-thinking</th>
                <td class ="border border-gray-600">{{ $studentinfo->less_intelligent }}</td>
                <th class ="border  border-gray-600">MORE INTELEGENT, ABSTRACT-THINKING, bright</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">AFFECTED BY FEELINGS, emotionally less stable, easily upset, changeable</th>
                <td class ="border border-gray-600">{{ $studentinfo->affected_by_feelings}}</td>
                <th class ="border border-gray-600">EMOTIONALLY STABLE, faces reality, calm</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">PHLEGMATIC, deliberate, inactive, stodgy</th>
                <td class ="border border-gray-600">{{ $studentinfo->phlegmatic}}</td>
                <th class ="border border-gray-600">EXCITABLE, IMPATIENT, DEMANDING, OVERACTIVE</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">OBEDIENT, mild, conforming</th>
                <td class ="border border-gray-600">{{ $studentinfo->obedient }}</td>
                <th class ="border border-gray-600">ASSERTIVE, independent, aggressive, stuborm</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">SOBER, prudent, serious, tacitum</th>
                <td class ="border border-gray-600">{{ $studentinfo->disregards_rules }}</td>
                <th class ="border border-gray-600">HAPPY-GO-LUCKY, headless, gay, enthusiastic</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">DISREGARDS RULES, undependable, by-passes obligations</th>
                <td class ="border border-gray-600">{{ $studentinfo->shy }}</td>
                <th class ="border border-gray-600">CONCIENTIOUS, preserving, staid, rule-bound</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">SHY, restrained, different, timid</th>
                <td class ="border border-gray-600">{{ $studentinfo->tough_minded }}</td>
                <th class ="border border-gray-600">VENTURSOME, socially bold, uninhibited, spountaneous</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">TOUGH-MINDED, self-reliant, realistic, no-nonsense/th>
                <td class ="border border-gray-600">{{ $studentinfo->sober }}</td>
                <th class ="border border-gray-600">TINDER-MINDED, dependent, over-protected, sensitve</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">VIGOROUS, goes readily with group, zestful, given to action</th>
                <td class ="border border-gray-600">{{ $studentinfo->vigorous }}</td>
                <th class ="border border-gray-600">DOUBTING, obstructive, individualistic, reflective, internally restrained, unwilling to act</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">SELF-ASSURED, placid, secure, serene</th>
                <td class ="border border-gray-600">{{ $studentinfo->self_assured }}</td>
                <th class ="border border-gray-600">APPREHENSIVE, worrying, depressive, resourceful</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">GROUP-DEPENDENT, a "joiner" and sound follower</th>
                <td class ="border border-gray-600">{{ $studentinfo->group_dependent }}</td>
                <th class ="border border-gray-600">SELF-SUFFICIENT, prefers own decisions, resourceful</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">CASUAL, careless of society rules, untidy, follows own urges</th>
                <td class ="border border-gray-600">{{ $studentinfo->casual }}</td>
                <th class ="border border-gray-600">CONTROLLED, socially-precise, self-disciplined, compulsive</th>
            </tr>
            <tr>
                <th class ="border border-gray-600">RELAXED, tranquil, torpid, understated</th>
                <td class ="border border-gray-600">{{ $studentinfo->relaxed }}</td>
                <th class ="border border-gray-600">TENSE, driven, overwrought, fretful</th>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
</div>