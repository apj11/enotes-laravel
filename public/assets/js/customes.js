
//for lead-detail popup & close
// var el = document.getElementById('lead-detail');
// el.addEventListener('click', function() {
//     document.querySelector('.lead-detail').style.display = 'flex';
// });
//
// var el = document.getElementById('lead-detail-close');
// el.addEventListener('click', function() {
//     document.querySelector('.lead-detail').style.display = 'none';
// });


//for lead-assignment popup & close
var assign = document.getElementById('popup-container');
assign.addEventListener('click', function() {
    document.querySelector('.popup-container').style.display = 'flex';
});

var assign = document.getElementById('popup-close');
assign.addEventListener('click', function() {
    document.querySelector('.popup-container').style.display = 'none';
});


//
// var assign = document.getElementsByClassName('popup-container');
// assign.addEventListener('click', function() {
//     document.querySelector('.popup-container').style.display = 'flex';
// });
//
// var assign = document.getElementsByClassName('popup-close');
// assign.addEventListener('click', function() {
//     document.querySelector('.popup-container').style.display = 'none';
// });
//



$(document).ready(function () {
    $('#dtVerticalScrollExample').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
});


