var baseUrl= window.location.origin;
function createEployeeModal() {

    if($('#createEmployee').val()===1){
        console.log($('#createEmployee').val())
        largeModal.showModal();
    }else{
        $('#largeModalTitle').html('Add a new employee');
        let spinner=$('#spinner-1').html();
        let html=`
        <div class="py-12 flex items-center justify-center">${spinner}</div>
    `
        $('#largeModalBody').html(html)
        largeModal.showModal()
        $.ajax(`${baseUrl}/employees/create`).then(function (res) {
            if(res.status===1){
                $('#largeModalBody').html(res.html)
            }
        })
    }


}

function removeInnerHtml(id) {
    $(`#${id}`).html('')
}

function validateEmployeeSingleData(dataContent, inputId, destinationId) {

    let inputValue=$(`#${inputId}`).val();
    let isAjax=false;
    $(`#${destinationId}`).html('');
    $(`#isValidate_${inputId}`).val(0)
    if(dataContent==='email' && inputValue.length!==0){
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(regex.test(inputValue)) {
            isAjax=true;
        } else {
            $(`#${destinationId}`).html(`<i class="fa-regular fa-circle-xmark"></i> Invalid email format`);
        }
    }
    if(dataContent==='phone' && inputValue.length>10){
        isAjax=true;
    }
    if(dataContent==='emp_id' && inputValue.length>3){
        isAjax=true;
    }
    if(isAjax) {
        $(`#${destinationId}`).html($('#spinner-small').html());
        $.ajax(`${baseUrl}/employees/validate-single-data?a=${dataContent}&val=${inputValue}`).then(function (res) {
            if (res.status === 1) {
                $(`#isValidate_${inputId}`).val(1)
                $(`#${destinationId}`).html(`<span class="text-green-600"><i class="fa-regular fa-circle-check"></i> ${res.msg}</span>`);
            } else {
                $(`#isValidate_${inputId}`).val(0)
                $(`#${destinationId}`).html(`<i class="fa-regular fa-circle-xmark"></i> ${res.msg}`);
            }
        })
    }
}
function validateEmployeeData() {
    console.log('24242')
    let submitPermission=true;
    let errorText='This field is required!';
    let employeeFullName=$('#employeeFullName');
    let employeeId=$('#employeeId');
    let isValidate_employeeId=$('#isValidate_employeeId');
    let employee_email=$('#employee_email');
    let isValidate_employee_email=$('#isValidate_employee_email');
    let employeePhone=$('#employeePhone');
    let isValidate_employeePhone=$('#isValidate_employeePhone');
    let firstError=null;
    let firstErrorMsg=null;

    if(employeeFullName.val()===''){
        submitPermission=false;
        $('#error_employeeFullName').html(errorText)
        if(firstError===null){
            firstError=employeeFullName
            firstErrorMsg='Full Name required!';
        }
    }else{
        $('#error_employeeFullName').html('')
    }
    if(isValidate_employeeId.val()!=='1'){
        submitPermission=false;
        $('#error_employeeId').html(errorText)
        if(firstError===null){
            firstError=employeeId;
            firstErrorMsg='Employee ID required!';
        }
    }else{
        if(employeeId.val()==='') $('#error_employeeId').html('')
    }
    if(isValidate_employee_email.val()!=='1'){
        submitPermission=false;
        $('#error_employee_email').html(errorText)
        if(firstError===null){
            firstError=employee_email
            firstErrorMsg='Email required!';
        }
    }else{
        if(employee_email.val()==='') $('#error_employee_email').html('')
    }
    if(isValidate_employeePhone.val()!=='1'){
        submitPermission=false;
        $('#error_employeePhone').html(errorText)
        if(firstError===null){
            firstError=employeePhone
            firstErrorMsg='Phone required!';
        }
    }else{
        if(employeePhone.val()==='') $('#error_employeePhone').html('')
    }

    if(!submitPermission){
        activeTab('employee-tab-item-1')
        firstError.focus();
    }
    return submitPermission;
}
function validateEmployeeEditData(section) {
    let submitPermission=true;
    let errorText='This field is required!';
    let employeeFullName=$('#employeeFullName');
    let employeeId=$('#employeeId');
    let isValidate_employeeId=$('#isValidate_employeeId');
    let employee_email=$('#employee_email');
    let isValidate_employee_email=$('#isValidate_employee_email');
    let employeePhone=$('#employeePhone');
    let isValidate_employeePhone=$('#isValidate_employeePhone');
    let firstError=null;
    let firstErrorMsg=null;
    if(employeeFullName.val().length===0){
        submitPermission=false;
        $('#error_employeeFullName').html(errorText)
        if(firstError===null){
            firstError=employeeFullName
            firstErrorMsg='Full Name required!';
        }
    }else{
        $('#error_employeeFullName').html('')
    }
    /*if(isValidate_employeeId.val()!=='1'){
        submitPermission=false;
        $('#error_employeeId').html(errorText)
        if(firstError===null){
            firstError=employeeId;
            firstErrorMsg='Employee ID required!';
        }
    }else{
        if(employeeId.val()==='') $('#error_employeeId').html('')
    }*/
    if(isValidate_employee_email.val()!=='1'){
        submitPermission=false;
        $('#error_employee_email').html(errorText)
        if(firstError===null){
            firstError=employee_email
            firstErrorMsg='Email required!';
        }
    }else{
        if(employee_email.val()==='') $('#error_employee_email').html('')
    }
    if(isValidate_employeePhone.val()!=='1'){
        submitPermission=false;
        $('#error_employeePhone').html(errorText)
        if(firstError===null){
            firstError=employeePhone
            firstErrorMsg='Phone required!';
        }
    }else{
        if(employeePhone.val()==='') $('#error_employeePhone').html('')
    }

    if(!submitPermission){
        //  activeTab('employee-tab-item-1')
        firstError.focus();
    }
    return submitPermission;
}



function deletePopup(title, deletedText, url) {
    $('#deleteModalTitle').html(title)
    $('#deletedText').html(deletedText)
    $('#deleteForm').attr('action', url)
    deleteModal.showModal()
}

function copyToClipboardForDeletePopup() {
    let text = $('#deletedText').html();
    try {
        navigator.clipboard.writeText(text)
            .then(() => {
                $("#deletedTextInput").val(text)
                $("#deleteButton").prop("disabled", false);
            })
            .catch((error) => {
                //showAlert('Unable to copy text to clipboard:', error);
            });
    } catch (error) {
        console.error('Clipboard API not supported:', error);
    }
}


function editEmployeeForm(id, section) {
    $(`#${section}-details-view-wrap`).addClass('hidden')
    $(`#${section}-details-edit-wrap`).html($("#spinner-large").html())
    $(`#${section}-details-edit-wrap`).removeClass('hidden')
    $.ajax(`${baseUrl}/employees/edit/${id}?a=${section}`).then(function (res) {
        if(res.status===1){
            $(`#${section}-details-edit-wrap`).html(res.html)
        }
    })
}
function cancelEmployeeEdit(section) {
    $(`#${section}-details-view-wrap`).removeClass('hidden')
    $(`#${section}-details-edit-wrap`).addClass('hidden')
}


function addEducationForm(id) {
    $('#educationFormsWrap').html($('#educationForm').html())
    $('.institution_name').focus();
}

function addDocumentForm(id) {
    $('#documentFormsWrap').html($('#addDocumentForm').html())
    $('.documentTitle').focus();
}

function setActiveTab(active) {
    var currentUrl = new URL(window.location.href);
    var params = new URLSearchParams(currentUrl.search);

    if (params.has('active')) {
        params.set('active', active);
    } else {
        params.append('active', active);
    }
    currentUrl.search = params.toString();
    window.history.pushState({ path: currentUrl.href }, '', currentUrl.href);
}

