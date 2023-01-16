<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            SOCIAL PROFILE
        </h2>
    </header>
    <div class='flex flex-col items-center'>
    <div class="mb-8">
        <label class = "font-bold">DO YOU HAVE REAL FRIENDS:</label>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
              <tr>
                <th class ="border border-gray-600">Of Your Age?</th>
                <th class ="border border-gray-600">{{ $studentinfo->friends_same_age }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class ="border border-gray-600">Older Than You?</th>
                <td class ="border border-gray-600">{{ $studentinfo->friends_older }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Younger Than You?</th>
                <td class ="border border-gray-600">{{ $studentinfo->friends_younger }}</td>
              </tr>
            </tbody>
        </table>
    </div>
    <div class="mb-8">
        <label class = "font-bold">ARE MOST OF YOUR FRIENDS:</label>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
              <tr>
                <th class ="border border-gray-600">Boys?</th>
                <th class ="border border-gray-600">{{ $studentinfo->friends_boys }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class ="border border-gray-600">Girls?</th>
                <td class ="border border-gray-600">{{ $studentinfo->friends_girls }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">From another school?</th>
                <td class ="border border-gray-600">{{ $studentinfo->friend_other_school }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">From this school?</th>
                <td class ="border border-gray-600">{{ $studentinfo->friend_this_school }}</td>
              </tr>
            </tbody>
        </table>
    </div>
    @php
        $friends = explode(',', $studentinfo->list_friends);
        $talents = explode(',', $studentinfo->list_talents_hobbies)
    @endphp
    <div class="mb-8">
        <label class = "font-bold">LIST DOWN YOUR BEST FRIENDS AT PSHS:</label>
        <ol class="list-decimal">
            @foreach ($friends as $friend)
            <li class='ml-8'>{{ $friend }}</li>
            @endforeach
          </ol>
    </div>
    <div class="mb-8">
        <label class = "font-bold">LIST DOWN YOUR HOBBIES, SPECIAL TALENTS, SKILLS, INTERESTS OR LEISURE TIME ACTIVITIES:</label>
        <ol class="list-decimal">
            @foreach ($talents as $talent)
            <li class='ml-8'>{{ $talent }}</li>
            @endforeach
          </ol>
    </div>
</div>
</div>