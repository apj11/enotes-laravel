var el = document.getElementById('employee-search');
el.addEventListener('click', function() { 
    document.querySelector(newFunction()).style.display = 'flex';
});

function newFunction() {
    return '.employee-list';
}

document.querySelector('.close').addEventListener('click', function() {
    document.querySelector('.employee-list').style.display = 'none';
});

// close-on-row-click
var row = document.getElementById('row-selection1');
row.addEventListener('click', function() { 
    document.querySelector(newFunction()).style.display = 'none';
});
var row = document.getElementById('row-selection2');
row.addEventListener('click', function() { 
    document.querySelector(newFunction()).style.display = 'none';
});
var row = document.getElementById('row-selection3');
row.addEventListener('click', function() { 
    document.querySelector(newFunction()).style.display = 'none';
});
// end


$(document).ready(function () {
    $('#dtVerticalScrollExample').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
});