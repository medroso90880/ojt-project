<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            FAMILY BACKGROUND
        </h2>
    </header>
    <div class='flex flex-col items-center'>
        <table class="table-auto border-spacing-0 border-gray-600">
            <thead>
              <tr>
                <th class ="border border-gray-600"></th>
                <th class ="border border-gray-600">Mother</th>
                <th class ="border border-gray-600">Father</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class ="border border-gray-600">Name</th>
                <td class ="border border-gray-600">{{ $familyinfo->name_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->name_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Age</th>
                <td class ="border border-gray-600">{{ $familyinfo->age_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->age_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Educational Attainment</th>
                <td class ="border border-gray-600">{{ $familyinfo->educational_attain_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->educational_attain_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">School Attended</th>
                <td class ="border border-gray-600">{{ $familyinfo->school_attended_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->school_attended_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Occupation</th>
                <td class ="border border-gray-600">{{ $familyinfo->occupation_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->occupation_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Company Address</th>
                <td class ="border border-gray-600">{{ $familyinfo->company_add_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->company_add_father }}</td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Contact Number</th>
                <td class ="border border-gray-600">{{ $familyinfo->contact_number_mother }}</td>
                <td class ="border border-gray-600">{{ $familyinfo->contact_number_father }}</td>
              </tr>
            </tbody>
          </table>
          <label class = "font-bold">Marital Status:</label>{{ $familyinfo->marital_status }}
    </div>

    <div class='mt-6 flex flex-col items-center'>
        
      @php
        $count = 0;
        $sibling_names = explode(',',$familyinfo->name_sibling ); 
        $sibling_ages = explode(',',$familyinfo->age_sibling );
        $sibling_educs = explode(',',$familyinfo->educational_attain_sibling );
        $sibling_schools = explode(',',$familyinfo->school_attended_sibling );
        $sibling_occupations = explode(',',$familyinfo->occupation_sibling );
      @endphp
      <table class="table-auto border-spacing-0 border-gray-600">
        <thead>
          <tr>
            <th class ="border border-gray-600">Name</th>
            <th class ="border border-gray-600">Age</th>
            <th class ="border border-gray-600">Educational Attainment</th>
            <th class ="border border-gray-600">School</th>
            <th class ="border border-gray-600">Occupation</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($sibling_names as $siblings)      
          <tr>
            <td class ="border border-gray-600">{{ $siblings}}</td>
            <td class ="border border-gray-600">{{ $sibling_ages[$count] }}</td>
            <td class ="border border-gray-600">{{ $sibling_educs[$count] }}</td>
            <td class ="border border-gray-600">{{ $sibling_schools[$count] }}</td>
            <td class ="border border-gray-600">{{ $sibling_occupations[$count] }}</td>
          </tr>
        @php
            $count++;
        @endphp
        @endforeach
        </tbody>
      </table>
    </div>
</div>
