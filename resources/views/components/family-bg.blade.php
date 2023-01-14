<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            FAMILY BACKGROUND
        </h2>
    </header>
            
    <div class="flex">
        <div class="flex-1 w-max">
          <x-card>
            <div class="text-center font-bold text-xl">
                Mother
            </div>
            <div>
                <label class = "font-bold">Name:</label>
                <label >{{ $familyinfo->name_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Age:</label>
                <label >{{ $familyinfo->age_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Educational Attainment:</label>
                <label >{{ $familyinfo->educational_attain_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">School Attended:</label>
                <label >{{ $familyinfo->school_attended_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Occupation:</label>
                <label >{{ $familyinfo->occupation_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Company Address:</label>
                <label >{{ $familyinfo->company_add_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Contact Number:</label>
                <label >{{ $familyinfo->contact_number_mother }}</label>
            </div>
          </x-card>
        </div>
        <div class='flex-1 w-max'>
          <x-card>
            <div class="text-center font-bold text-xl">
                Father
            </div>
            <div>
                <label class = "font-bold">Name:</label>
                <label >{{ $familyinfo->name_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Age:</label>
                <label >{{ $familyinfo->age_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Educational Attainment:</label>
                <label >{{ $familyinfo->educational_attain_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">School Attended:</label>
                <label >{{ $familyinfo->school_attended_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Occupation:</label>
                <label >{{ $familyinfo->occupation_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Company Address:</label>
                <label >{{ $familyinfo->company_add_mother }}</label>
            </div>
            <div>
                <label class = "font-bold">Contact Number:</label>
                <label >{{ $familyinfo->contact_number_mother }}</label>
            </div>
          </x-card>
        </div>
      </div>
      <div classs= "font-bold">
        <label class = "font-bold">Marital Status:</label>
        <label >{{ $familyinfo->marital_status }}</label>
      </div>

      @php
          $sibling_names = explode(',',$familyinfo->name_sibling ); 
          $sibling_ages = explode(',',$familyinfo->age_sibling );
          $sibling_educs = explode(',',$familyinfo->educational_attain_sibling );
          $sibling_schools = explode(',',$familyinfo->school_attended_sibling );
          $sibling_occupations = explode(',',$familyinfo->occupation_sibling );
      @endphp
<div class="flex">
    <div class="w-xl text-center">
        <x-card>
        <div class="text-center font-bold text-xl mb-4">
            Name
        </div>
        @foreach ( $sibling_names as $sibling_name )
        <div>
            <label >{{ $sibling_name }}</label>
        </div>
        @endforeach
        </x-card>
    </div> 
    <div class="w-18 text-center">
        <x-card>
        <div class="text-center font-bold mb-4 text-xl">
            Age
        </div>
        @foreach ( $sibling_ages as $sibling_age )
        <div>
            <label >{{ $sibling_age }}</label>
        </div>
        @endforeach
        </x-card>
    </div>
    <div class="flex-1 text-center">
        <x-card>
        <div class="text-center font-bold mb-4 text-xl">
            Educational Attainment
        </div>
        @foreach ( $sibling_educs as $sibling_educ )
        <div>
            <label >{{ $sibling_educ }}</label>
        </div>
        @endforeach
        </x-card>
    </div>
    <div class="flex-1 text-center">
        <x-card>
            <div class=" font-bold mb-4 text-xl">
                School
            </div>
            @foreach ( $sibling_schools as $sibling_school )
            <div>
                <label >{{ $sibling_school }}</label>
            </div>
            @endforeach
        </x-card>
    </div>
    <div class="flex-1 text-center">
        <x-card>
            <div class=" font-bold text-xl mb-4">
                Occupation
            </div>
            @foreach ( $sibling_occupations as $sibling_occupation )
            <div>
                <label >{{ $sibling_occupation }}</label>
            </div>
            @endforeach
        </x-card>
    </div>
</div>
</div>
