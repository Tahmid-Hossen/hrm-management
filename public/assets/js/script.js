


function createEducationField(index) {
    return `
    <div>
    <div class="mt-4"></div>
    <h3 class="text-sm text-gray-800 dark:text-white capitalize">Education - ${index}</h3>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
        <div>
            <label for="institution_name[]" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Institution Name
            </label>
            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
            <input id="institution_name[]" name="institution_name[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter institution name">
        </div>
        <div>
            <label for="degree_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Select Degree Type
            </label>
            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
            <select id="degree_${index}" name="degree[]" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected="">Select Degree</option>
                <option value="SSC">SSC</option>
                <option value="HSC">HSC</option>
                <option value="BSC">BSC</option>
                <option value="MSC">MSC</option>
            </select>
        </div>
        <div>
            <label for="department_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Department Name
            </label>
            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
            <input id="department_${index}" name="department[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter department">
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
        <div>
            <label for="passing_year_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Passing Year
            </label>
            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
            <input id="passing_year_${index}" name="passing_year[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter passing year">
        </div>
        <div>
            <label for="result_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Result
            </label>
            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
            <input id="result_${index}" name="result[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter result">
        </div>
    </div>
</div>
    `;
}

// Function to add a new education field

function numberToWords(number) {
    const words = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine",
        "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen",
        "twenty", "twenty-one", "twenty-two", "twenty-three", "twenty-four", "twenty-five", "twenty-six", "twenty-seven", "twenty-eight", "twenty-nine",
        "thirty", "thirty-one", "thirty-two", "thirty-three", "thirty-four", "thirty-five", "thirty-six", "thirty-seven", "thirty-eight", "thirty-nine",
        "forty", "forty-one", "forty-two", "forty-three", "forty-four", "forty-five", "forty-six", "forty-seven", "forty-eight", "forty-nine",
        "fifty"];
    return words[number];
}

function addEducationField() {
    const educationFields = document.getElementById('education-fields');
    const index = educationFields.children.length + 2; // Start index from 2
    const indexInWords = numberToWords(index);
    const newEducationField = createEducationField(indexInWords);
    educationFields.insertAdjacentHTML('beforeend', newEducationField);
}
document.getElementById('add-education-field').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    addEducationField();
});



