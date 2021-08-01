const selectStatus = document.querySelectorAll(".orderStatus");
const btnEdit = document.querySelectorAll(".btn__edit");
let orderStatusId;

selectStatus.forEach(el=>el.addEventListener('change', saveStatusHandler));
btnEdit.forEach(el=>el.addEventListener('click', changeStatusHandler));

function saveStatusHandler(e) {
    orderStatusId = e.target.value;
}

function changeStatusHandler(e) {
    $.ajax({
        url: e.target.value+"/"+orderStatusId,
        type: "POST",
    });
}