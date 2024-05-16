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
    $(`#${id}`).addClass('hidden');
    $(`#${id}`).html('');
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
    console.log("section===>",section);
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
    switch (section) {
        case 'personal':
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
            break;
        case 'education':
            let institution_name=$('#institution_name_one');
            let department_name=$('#department_one');
            let passing_year=$('#passing_year_one');
            let education_result=$('#result_one');

            if(institution_name.val()=='' ){
                submitPermission=false;
                $('#error_institution_name_one').html(errorText)
                if(firstError===null){
                    firstError=institution_name
                    firstErrorMsg='Institution name is required!';
                }
            } else $('#error_institution_name_one').html('');
            if(department_name.val()==''){
                submitPermission=false;
                $('#error_department_one').html(errorText)
                if(firstError===null){
                    firstError=department_name;
                    firstErrorMsg='Department name is required!';
                }
            } else $('#error_department_one').html('');

            if(passing_year.val()=='') {
                submitPermission=false;
                $('#error_passing_year_one').html(errorText)
                if(firstError===null){
                    firstError=passing_year
                    firstErrorMsg='Passing year is required!';
                }
            }else $('#error_passing_year_one').html('');
            if(education_result.val()=='') {
                submitPermission=false;
                $('#error_result_one').html(errorText)
                if(firstError===null){
                    firstError=education_result;
                    firstErrorMsg='Result is required!';
                }
            }else $('#error_institution_name_one').html('');

            break;
        default:
            submitPermission=false;
            break;
    }
    if(submitPermission === false){
        firstError.focus();
        //  activeTab('employee-tab-item-1')
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
    $('#educationFormsWrap').removeClass('hidden');
    $('#educationFormsWrap').html($('#educationForm').html())
    $('.institution_name').focus();
}

function addDocumentForm(id) {
    $('#documentFormsWrap').html($('#addDocumentForm').html())
    $('.documentTitle').focus();
}
function editBiometricForm() {
    $('#biometricFormsWrap').html($('#biometricForm').html())
    $('.biometric_id').focus();
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

function assignAsUserPopup(empId) {

    $.ajax(`${baseUrl}/employees/assign-user-form/${empId}`).then(function (res) {
        if(res.status===1){
            $(`#smallModalBody`).html(res.html)
            smallModal.showModal();
            $('#smallModalTitle').html('Assign As User');
        }else{
            toastr.error(res.msg)
        }
    })
}
function assignEmployeeAsUser(empId) {
    let submitPermission=true;
    let role=$('#role').val();
    let email=$('#assignUserEmployeeEmail').val();
    if(!email){
        submitPermission=false;
        toastr.error("There is no email found!")
    }
    if(submitPermission){
        $('#assignEmployeeAsUserBtn').html($('#spinner-small-white').html()+'creating...')
        $.ajax({
            url:`${baseUrl}/employees/assign-user/${empId}`,
            data:{
                role:role,
                email:email,
            }
        }).then(function (res) {
            if(res.status===1){
                toastr.success(res.msg)
                dataTable.ajax.reload();
                //window.location.reload();
            }else{
                toastr.error(res.msg)
            }
            smallModal.close()
        })
    }

}


function validateutySlotSingleData(inputId, destinationId) {
    let inputValue=$(`#${inputId}`).val();
    let isAjax=false;
    if(inputValue.length>1) isAjax=true;
    $(`#${destinationId}`).html('');
    $(`#isValidate_${inputId}`).val(0)
    if(isAjax){
        $(`#${destinationId}`).html($('#spinner-small').html());
        $.ajax(`${baseUrl}/duty-slots/validate-single-data?a=${inputId}&val=${inputValue}`).then(function (res) {
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

function validateDutySlot() {
    let submitPermission = true;
    let slot_name=$('#slot_name');
    let start_time=$('#start_time');
    let threshold_time=$('#threshold_time');
    let end_time=$('#end_time');
    let isValidate_slot_name=$('#isValidate_slot_name');
    let firstError=null;
    if(isValidate_slot_name.val()!=='1'){
        submitPermission = false;
        $('#error_slot_name').html('This field is required!')
        if(firstError===null){
            firstError=slot_name;
        }
    }else $('#error_slot_name').html('')

    if(start_time.val()===''){
        submitPermission = false;
        $('#error_start_time').html('This field is required!')
        if(firstError===null){
            firstError=start_time;
        }
    }else $('#error_start_time').html('')
    if(threshold_time.val()===''){
        submitPermission = false;
        $('#error_threshold_time').html('This field is required!')
        if(firstError===null){
            firstError=threshold_time;
        }
    }else $('#error_end_time').html('')
    if(end_time.val()===''){
        submitPermission = false;
        $('#error_end_time').html('This field is required!')
        if(firstError===null){
            firstError=end_time;
        }
    }else $('#error_end_time').html('')
    if(firstError!==null){
        firstError.focus();
    }
    return submitPermission;
}
function validateDutySlotRules(edit='') {
    let submitPermission = true;
    let slot_name=$(`#${edit}duty_slot_rules`);
    console.log("🚀 ~ validateDutySlotRules ~ slot_name:", slot_name.val());
    let start_date=$(`#${edit}start_date`);
    let end_date=$(`#${edit}end_date`);
    let start_time=$(`#${edit}start_time`);
    let threshold_time=$(`#${edit}threshold_time`);
    let end_time=$(`#${edit}end_time`);
    let firstError=null;
    if(slot_name.val()=== null){
        submitPermission = false;
        $(`#${edit}error_slot_name`).html(`This field is required!`)
        if(firstError===null){
            firstError=slot_name;
        }
    }else $(`#${edit}error_slot_name`).html(``)

    if(start_date.val()===``){
        submitPermission = false;
        $(`#${edit}error_start_date`).html(`This field is required!`)
        if(firstError===null){
            firstError=start_date;
        }
    }else $(`#${edit}error_start_date`).html(``)
    if(end_date.val()===``){
        submitPermission = false;
        $(`#${edit}error_end_date`).html(`This field is required!`)
        if(firstError===null){
            firstError=end_date;
        }
    }else $(`#${edit}error_end_date`).html(``)
    if(end_date.val() && start_date.val()){
        if(end_date.val()<start_date.val()){
            submitPermission = false;
            $(`#${edit}error_end_date`).html(`End Date must be greater than start date!`)
            if(firstError===null){
                firstError=end_date;
            }
        }else $(`#${edit}error_end_date`).html(``)
    }
    if(start_time.val()===``){
        submitPermission = false;
        $(`#${edit}error_start_time`).html(`This field is required!`)
        if(firstError===null){
            firstError=start_time;
        }
    }else $(`#${edit}error_start_time`).html(``)
    if(threshold_time.val()===``){
        submitPermission = false;
        $(`#${edit}error_threshold_time`).html(`This field is required!`)
        if(firstError===null){
            firstError=threshold_time;
        }
    }else $(`#${edit}error_end_time`).html(``)
    if(end_time.val()===``){
        submitPermission = false;
        $(`#${edit}error_end_time`).html(`This field is required!`)
        if(firstError===null){
            firstError=end_time;
        }
    }else $(`#${edit}error_end_time`).html(``)
    if(firstError!==null){
        firstError.focus();
    }
    console.log(submitPermission);
    // return false;
    return submitPermission;
}
function validateLeaveRequest(edit='') {
    let submitPermission = true;
    let select_employee=$(`#${edit}leave_select_employee`)[0].selectize.items;
    let leave_type_others=$(`#${edit}leave_type #hs-horizontal-list-group-item-radio-4`)[0].checked;
    let leave_reason = document.getElementById(`${edit}leave_reason`)
    let start_date=$(`#${edit}start_date`);
    let end_date=$(`#${edit}end_date`);
    let firstError=null;
    if(select_employee.length=== 0){
        submitPermission = false;
        $(`#${edit}error_leave_select_employee`).html(`This field is required!`)
    }else $(`#${edit}error_leave_select_employee`).html(``)
    if(leave_type_others && leave_reason.value ===''){
        console.log("found other");
        submitPermission = false;
        $(`#${edit}error_leave_reason`).html(`Please tell us your leave reason first!`)
        if(firstError===null){
            firstError=leave_reason;
        }
    }else $(`#${edit}error_leave_reason`).html(``)
    if(start_date.val()===``){
        submitPermission = false;
        $(`#${edit}error_start_date`).html(`This field is required!`)
        if(firstError===null){
            firstError=start_date;
        }
    }else $(`#${edit}error_start_date`).html(``)
    if(end_date.val()===``){
        submitPermission = false;
        $(`#${edit}error_end_date`).html(`This field is required!`)
        if(firstError===null){
            firstError=end_date;
        }
    }else $(`#${edit}error_end_date`).html(``)
    if(end_date.val() && start_date.val()){
        if(end_date.val()<start_date.val()){
            submitPermission = false;
            $(`#${edit}error_end_date`).html(`End Date must be greater than start date!`)
            if(firstError===null){
                firstError=end_date;
            }
        }else $(`#${edit}error_end_date`).html(``)
    }
    if(firstError!==null){
        firstError.focus();
    }
    console.log(submitPermission);
    return submitPermission;
}
function validateLateRequest(edit='',formType='late_arrival') {
    let submitPermission = true;
    let select_employee=$(`#${edit}late_select_employee`)[0].selectize.items;
    let late_type_others=$(`#${edit}late_type #hs-horizontal-list-group-item-radio-4`)[0].checked;
    let justification = document.getElementById(`${edit}justification`)
    let late_arrival_date=$(`#${edit}late_arrival_date`);
    let late_arrival_time=$(`#${edit}late_arrival_time`);
    let early_exit_date=$(`#${edit}early_exit_date`);
    let early_exit_time=$(`#${edit}early_exit_time`);
    let firstError=null;
    if(select_employee.length=== 0){
        submitPermission = false;
        $(`#${edit}error_late_select_employee`).html(`This field is required!`)
    }else $(`#${edit}error_late_select_employee`).html(``)
    if(justification.value ===''){
        submitPermission = false;
        $(`#${edit}error_justification`).html(`Please tell us your reason first!`)
        if(firstError===null){
            firstError=justification;
        }
    }else $(`#${edit}error_justification`).html(``)
    switch(formType){
        case 'late_arrival':
            if(late_arrival_date.val()===``){
                submitPermission = false;
                $(`#${edit}error_late_arrival_date`).html(`This field is required!`)
                if(firstError===null){
                    firstError=late_arrival_date;
                }
            }else $(`#${edit}error_late_arrival_time`).html(``)
            if(late_arrival_time.val()===``){
                submitPermission = false;
                $(`#${edit}error_late_arrival_time`).html(`This field is required!`)
                if(firstError===null){
                    firstError=late_arrival_time;
                }
            }else $(`#${edit}error_late_arrival_time`).html(``)
            break;
        case 'early_exit':
            if(early_exit_date.val()===``){
                submitPermission = false;
                $(`#${edit}error_early_exit_date`).html(`This field is required!`)
                if(firstError===null){
                    firstError=early_exit_date;
                }
            }else $(`#${edit}error_early_exit_time`).html(``)
            if(early_exit_time.val()===``){
                submitPermission = false;
                $(`#${edit}error_early_exit_time`).html(`This field is required!`)
                if(firstError===null){
                    firstError=early_exit_time;
                }
            }else $(`#${edit}error_early_exit_time`).html(``)
            break;
        default:
            break;
    }

    if(firstError!==null){
        firstError.focus();
    }
    console.log(submitPermission);
    return false;
    return submitPermission;
}
function handleChangeFormType(e) {
    if (e.value === 'late_arrival') {
        console.log("founded");
        $('#early_exit_type').addClass('hidden');
        $('#late_arrival_type').removeClass('hidden');
    } else {
        console.log("late_arrival_type");
        $('#late_arrival_type').addClass('hidden');
        $('#early_exit_type').removeClass('hidden');
    }
}


function editDutySlotRuleModal(title, url) {
    largeModal.showModal();
    $('#largeModalTitle').html(title);
    $(`#largeModalBody`).html($('#spinner-large').html())
    $.ajax(`${url}`).then(function (res) {
        if(res.status===1){
            $(`#largeModalBody`).html(res.html)
        }else{
            toastr.error(res.msg)
        }
    })
}
/* function createLeaveRequestModal(title, url) {
    largeModal.showModal();
    $('#largeModalTitle').html(title);
    $(`#largeModalBody`).html($('#spinner-large').html())
    $.ajax(`${url}`).then(function (res) {
        if(res.status===1){
            $(`#largeModalBody`).html(res.html)
        }else{
            toastr.error(res.msg)
        }
    })
} */

