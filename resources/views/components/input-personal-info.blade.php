
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            PERSONAL INFORMATION
        </h2>
    </header>
    
    <form method="POST" action="/store/personal-info" enctype="multipart/form-data">
        @csrf 
        <div class="mb-2 gap-2 text-center space-y-4">
            <div>
                <label class="font-bold">Family Name: </label>
                <input type="text" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">First Name: </label>
                <input type="text" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">Middle Name:</label>
                <input type="text" name="middle_name" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
    
                   <!--Sex and contact number -->
            <div>
                <label class="font-bold">Sex:</label>
                <input type="text" name="sex" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">Age: </label>
                <input type="text" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">Contact No:</label>
                <input type="text" name="contact_number" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
    
            <!--RELIGION, EMAIL ADD, CELL#-->
            <div>
                <label class="font-bold">Cellphone No:</label>
                <input type="text" name="cell_number" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
    
            <div>
                <label class="font-bold">Nationality:</label>
                <input type="text" name="nationality" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">E-mail Address</label>
                <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">Religion:</label>
                <input type="text" name="religion" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
                <label class="font-bold">Permanent Address:</label>
                <input type="text" name="permanent_add" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            <div>
                <label class="font-bold">Date of birth</label>
                <input type="text" name="date_of_birth" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>
                <label class="font-bold">Place of Birth</label>
                <input type="text" name="place_of_birth" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
            </div>
            <div>

            </div>
            <button type='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Save
          </button>
        </div>
    </form>
    