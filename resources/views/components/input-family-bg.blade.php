
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            FAMILY BACKGROUND
        </h2>
    </header>
    <form method="POST" action="/store/family-bg" enctype="multipart/form-data">
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
                <td class ="border border-gray-600"><input type="text" name="name_sibling" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="name_sibling" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Age</th>
                <td class ="border border-gray-600"><input type="text" name="age-mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="age_father" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Educational Attainment</th>
                <td class ="border border-gray-600"><input type="text" name="educational_attain_mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="educational_attain_father" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">School Attended</th>
                <td class ="border border-gray-600"><input type="text" name="school_attended_mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="school_attended_father" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Occupation</th>
                <td class ="border border-gray-600"><input type="text" name="occupation_add_mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="occupation_add_father" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Company Address</th>
                <td class ="border border-gray-600"><input type="text" name="company_add_mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="company_add_father" required=""></td>
              </tr>
              <tr>
                <th class ="border border-gray-600">Contact Number</th>
                <td class ="border border-gray-600"><input type="text" name="contact_number_mother" required=""></td>
                <td class ="border border-gray-600"><input type="text" name="contact_number_father" required=""></td>
              </tr>
            </tbody>
          </table>
          <label class = "font-bold">Marital Status:</label><input type="text" name="marital_status" class="bg-gray-50 border border-gray-300 text-gray-900 " required="">
    </div>

    <div class='mt-6 flex flex-col items-center'>
      <table class="table-auto border-spacing-0 border-gray-600">
        <thead>
          <tr>
            <th class ="border border-gray-600">Name</th>
            <th class ="border border-gray-600">Age</th>
            <th class ="border border-gray-600">Educational Attainment</th>
            <th class ="border border-gray-600">School Attended</th>
            <th class ="border border-gray-600">Coccupation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class ="border border-gray-600"><input type="text" name="name_sibling1" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="age_sibling1" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="educational_attain_sibling1" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="school_attended_sibling1" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="occupation_sibling1" required=""></td>
          </tr>
          <tr>
            <td class ="border border-gray-600"><input type="text" name="name_sibling2" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="age_sibling2" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="educational_attain_sibling2" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="school_attended_sibling2" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="occupation_sibling2" required=""></td>
          </tr>
          <tr>
            <td class ="border border-gray-600"><input type="text" name="name_sibling3" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="age_sibling3" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="educational_attain_sibling3" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="school_attended_sibling3" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="occupation_sibling3" required=""></td>
          </tr>
          <tr>
            <td class ="border border-gray-600"><input type="text" name="name_sibling4" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="age_sibling4" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="educational_attain_sibling4" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="school_attended_sibling4" required=""></td>
            <td class ="border border-gray-600"><input type="text" name="occupation_sibling4" required=""></td>
          </tr>
        </tbody>
      </table>
      <button type='submit' class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Save
  </button>
    </div>

    </form>
</div>
