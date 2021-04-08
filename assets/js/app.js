const flashdata = $('.flash-data').data('flashdata');

console.log(flashdata);

if (flashdata) {
    Swal.fire({
        title: 'Success',
        text: flashdata,
        type: 'success' 
    });
}