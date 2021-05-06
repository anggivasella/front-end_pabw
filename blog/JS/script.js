$(function() {
    $('.edit').on('click', function() {
        const id = $(this).data('id');
        $.ajax({
            url: 'CRUD/ambil.php',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id).prop('readonly', true);
                $('#judul').val(data.judul);
            }
        });
    });

    $('#batal').click(function() {
        $('#ubah').hide();
        $('#simpan').show();
        $('#batal').hide();
        $('.form')[0].reset();
    });

    $('#ubah').on('click', function() {
        $('.form').attr('action', 'jenisdisposisi/ubah');
    });

});