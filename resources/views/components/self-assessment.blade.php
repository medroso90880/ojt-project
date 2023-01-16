<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            STUDENT SELF-ASSESSMENT
        </h2>
    </header>
    <div class='flex flex-col items-center'>
        <div class="mb-8">
            <label class = "font-bold">Based on self-observation, feedback gained from other people and
                personal experiences, a scale of 1-5 where; 1 - Exellent, 2 - Very Good, 3 - Good, 4 - Fair, 5 - Poor.</label>
        </div>
        <table class="table-fixed border-spacing-0 border-gray-600">
            <thead>
              <tr>
                <th class ="border border-gray-600"></th>
                <th class ="border border-gray-600">Assessment</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th class ="border border-gray-600 w-10">PHYSICAL WELL-BEING(appearance, health,grooming)</th>
                <td class ="border border-gray-600">{{ $studentinfo->physical_well_being }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">MENTAL(Comprehension,Reasoning & Judgement,Alertness)</th>
                <td class ="border border-gray-600">{{ $studentinfo->mental_comprehension }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">SPEECH(fluency, diction,voice, manner of expression, spontaneity of thoughts)</th>
                <td class ="border border-gray-600">{{ $studentinfo->speech_english}}</td>
              </tr>
                <tr>
                <th class ="border border-gray-600"> PERSONALITY(self-confidence,social graces, attitude and values,interpersonal skills,emotional adaptability)</th>
                <td class ="border border-gray-600">{{ $studentinfo->personality }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">CHARACTER(integrity, industry & resourcefulness,observance of school rules & regulation,cooperation,responsibility, respect for others & property)</th>
                <td class ="border border-gray-600">{{ $studentinfo->personality }}</td>
              </tr>
            </tbody>
          </table>
          @php
              $generals = explode(',', $studentinfo->general_make_up);
          @endphp
            <div class="mb-8">
                
                <ol class="list-disc">
                    <label class = "font-bold">General make up:</label>
                    @foreach ($generals as $general)
                    <li class='ml-12'>{{ $general }}</li>
                    @endforeach
                  </ol>
            </div>
          <div>
            <h2 class = "font-bold uppercase mb-2">Complete the following statements:</h2>
            <div>
                <label class="font-bold">My father and my mother: </label>
                {{ $studentinfo->statement_1 }}
            </div>
            <div>
                <label class="font-bold"> My greatest mistake: </label>
                {{ $studentinfo->statement_2 }}
            </div>
            <div>
                <label class="font-bold">I wish my parents were: </label>
                {{ $studentinfo->statement_3 }}
            </div>
            <div>
                <label class="font-bold">In school, my teacher: </label>
                {{ $studentinfo->statement_4 }}
            </div>
            <div>
                <label class="font-bold"> I like friends because: </label>
                {{ $studentinfo->statement_5 }}
            </div>
            <div>
                <label class="font-bold">Compared with most families, mine: </label>
                {{ $studentinfo->statement_6 }}
            </div>
            <div>
                <label class="font-bold">I always wanted to: </label>
                {{ $studentinfo->statement_7}}
            </div>
    
            <div>
                <label class="font-bold">I feel that my father: </label>
                {{ $studentinfo->statement_8 }}
            </div>
            <div>
                <label class="font-bold">At school, I get along with: </label>
                {{ $studentinfo->statement_9 }}
            </div>
    
            <div>
                <label class="font-bold">My mother:</label>
                {{ $studentinfo->statement_10 }}
            </div>
          </div>
    </div>
</div>
