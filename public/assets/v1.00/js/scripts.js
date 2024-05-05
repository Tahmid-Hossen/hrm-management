var baseUrl= window.location.origin;
function createEployeeModal() {
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

function validateEmail(inputId, dataContent, destinationId) {
    let inputValue=$(`#${inputId}`).val();
    $.ajax(`${baseUrl}/employees/validate-single-data?a=${dataContent}&val=${inputValue}`).then(function (res) {
        if(res.status===0){
            $(`#error_${inputId}`).html(res.msg);
        }else{
            $(`#error_${inputId}`).html('');
        }
    })
}
function validateEmployeeData() {
    console.log('24242')
    let submitPermission=true;
    let errorText='This field is required!';
    let employeeFullName=$('#employeeFullName');
    let firstError=null;
    if(employeeFullName.val()===''){
        submitPermission=false;
        $('#error_employeeFullName').html(errorText)
        if(firstError===null){
            firstError=employeeFullName
        }

    }
    if(!submitPermission){
        firstError.focus();
    }
    return false;
}

