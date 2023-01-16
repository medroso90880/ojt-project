<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            VOCATIONAL PLANNING
        </h2>
    </header>
    <div class='flex flex-col items-center'>
        <div class="mb-8">
            @php
                $grade = 0;
                $firsts = explode(',,', $studentinfo->first);
                $seconds = explode(',,', $studentinfo->second);
            @endphp
            <table class="table-fixed border-spacing-0 border-gray-600">
                <thead>
                  <tr>
                    <th class ="border border-gray-600 "></th>
                    @for ($grade = 7 ; $grade <= 12; $grade++)
                        <th class ="border border-gray-600 w-48">Grade{{ $grade }}</th>
                    @endfor
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class ="border border-gray-600">1st</th>
                    @foreach ($firsts as $first)
                    <td class ="border border-gray-600">{{ $first }}</td>
                    @endforeach         
                  </tr>
                  <tr>
                    <th class ="border border-gray-600">2nd</th>
                    @foreach ($seconds as $second)
                    <td class ="border border-gray-600">{{ $second }}</td>
                    @endforeach   
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>