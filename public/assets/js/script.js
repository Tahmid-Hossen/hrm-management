// ---------- 01 For Education Dynamic Part Start ----------//
function createEducationField(index) {
    return `
    <div class="education-field">
        <div class="mt-4"></div>
        <h3 class="text-sm text-gray-800 dark:text-white capitalize">Education - ${index}</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="institution_name_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Institution Name
                </label>
                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                <input id="institution_name_${index}" name="institution_name_${index}" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter institution name">
            </div>
            <div>
                <label for="degree_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Select Degree Type
                </label>
                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                <select id="degree_${index}" name="degree_${index}" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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
                <input id="department_${index}" name="department_${index}" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter department">
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="passing_year_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Passing Year
                </label>
                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                <input id="passing_year_${index}" name="passing_year_${index}" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter passing year">
            </div>
            <div>
                <label for="result_${index}" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Result
                </label>
                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                <input id="result_${index}" name="result_${index}" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter result">
            </div>
        </div>
        <div class="mt-2">
            <button class="remove-education-field inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600" data-index="${index}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708"/>
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>
            Remove</button>
        </div>
    </div>
    `;
}

function numberToWords(number) {
    const words = [
        "zero",
        "one",
        "two",
        "three",
        "four",
        "five",
        "six",
        "seven",
        "eight",
        "nine",
        "ten",
        "eleven",
        "twelve",
        "thirteen",
        "fourteen",
        "fifteen",
        "sixteen",
        "seventeen",
        "eighteen",
        "nineteen",
        "twenty",
        "twenty-one",
        "twenty-two",
        "twenty-three",
        "twenty-four",
        "twenty-five",
        "twenty-six",
        "twenty-seven",
        "twenty-eight",
        "twenty-nine",
        "thirty",
        "thirty-one",
        "thirty-two",
        "thirty-three",
        "thirty-four",
        "thirty-five",
        "thirty-six",
        "thirty-seven",
        "thirty-eight",
        "thirty-nine",
        "forty",
        "forty-one",
        "forty-two",
        "forty-three",
        "forty-four",
        "forty-five",
        "forty-six",
        "forty-seven",
        "forty-eight",
        "forty-nine",
        "fifty",
    ];
    return words[number];
}

// Function to add a new education field
function addEducationField() {
    const educationFields = document.getElementById("education-fields");
    const index = educationFields.children.length + 2; // Start index from 2
    const indexInWords = numberToWords(index);
    const newEducationField = createEducationField(indexInWords);
    educationFields.insertAdjacentHTML("beforeend", newEducationField);
}

// Function to remove an education field
function removeEducationField(event) {
    const button = event.target;
    const index = button.dataset.index;
    const educationField = button.closest(".education-field");
    educationField.remove();
}

// Event listener to add a new education field
document
    .getElementById("add-education-field")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior
        addEducationField();
    });

// Event delegation to handle remove button clicks
document.addEventListener("click", function (event) {
    if (
        event.target &&
        event.target.classList.contains("remove-education-field")
    ) {
        removeEducationField(event);
    }
});
// ---------- 01 For Education Dynamic Part Ends ----------//

// ---------- 02 For Handle Attendance Type Change Function Start  ------------ //
function handleAttendanceTypeChange(event) {
    const monthlyRadio = document.getElementById("attendance-monthly");
    const monthlyContainer = document.getElementById(
        "attendance-month-container",
    );
    const dailyRadio = document.getElementById("attendance-daily");
    const dateContainer = document.getElementById("attendance-date-container");

    monthlyContainer.style.display = monthlyRadio.checked ? "block" : "none";
    dateContainer.style.display = dailyRadio.checked ? "block" : "none";
}

document
    .getElementById("attendance-monthly")
    .addEventListener("change", handleAttendanceTypeChange);
document
    .getElementById("attendance-daily")
    .addEventListener("change", handleAttendanceTypeChange);

handleAttendanceTypeChange();

// ---------- 02 For Handle Attendance Type Change Function Ends ------------ //

// Modal script

function editAttendance(id = 10) {
    let htmlForm = $("#editAttendanceForm").html();
    let html = `<form method="POST" action="/opop/${id}">${htmlForm}</form>`;
    $("#smallSizeModalBody").html(html);
    smallSizeModal.showModal();
}
