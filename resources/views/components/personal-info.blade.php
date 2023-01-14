<div>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        PERSONAL INFORMATION
    </h2>
</header>
</div>

<!--Name-->
{{-- <form method="POST" action="/register/store" enctype="multipart/form-data"> --}}
    {{-- @csrf --}}

    <div class="mb-2 gap-2 text-center ">
        <div class="flex flex-col items-center pb-10">       
            <img class="border mb-8 hidden w-40 md:block"
            src="{{$studentinfo->picture ? asset('storage/' . $studentinfo->picture) : asset('images/profile.jpg')}}"
            alt=""
        />
        <div>
            <label class="font-bold">Family Name: </label>
            {{ $studentinfo->last_name }}
        </div>
        <div>
            <label class="font-bold">First Name: </label>
            {{ $studentinfo->first_name }}
        </div>
        <div>
            <label class="font-bold">Middle Name:</label>
            {{ $studentinfo->middle_name }}
        </div>

               <!--Sex and contact number -->
        <div>
            <label class="font-bold">Sex:</label>
            {{ $studentinfo->sex }}
        </div>
        <div>
            <label class="font-bold">Age: </label>
            {{ $studentinfo->age }}
        </div>
        <div>
            <label class="font-bold">Contact No:</label>
            {{ $studentinfo->contact_number }}
        </div>

        <!--RELIGION, EMAIL ADD, CELL#-->
        <div>
            <label class="font-bold">Cellphone No:</label>
            {{ $studentinfo->cell_number }}
        </div>

        <div>
            <label class="font-bold">Nationality:</label>
            {{ $studentinfo->nationality }}
        </div>
        <div>
            <label class="font-bold">E-mail Address</label>
            {{ $studentinfo->email }}
        </div>

        <div>
            <label class="font-bold">Religion:</label>

            {{ $studentinfo->religion }}
        </div>
        <div>
            <label class="font-bold">Permanent Address:</label>
            {{ $studentinfo->permanent_add }}
    
        
            <div>
                <label class="font-bold">Date of birth</label>
                {{ $studentinfo->date_of_birth }}
    
            </div>
            <div>
                <label class="font-bold">Place of Birth</label>
                {{ $studentinfo->place_of_birth }}
            </div>
        </div>
    </div>
