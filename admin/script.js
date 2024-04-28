$(document).ready(function(){
    // Menampilkan data pengguna saat halaman dimuat
    loadUserTable();

    // Fungsi untuk menampilkan tabel pengguna
    function loadUserTable(){
        $.ajax({
            url: 'get_users.php',
            type: 'GET',
            success: function(response){
                $('#userTable').html(response);
            }
        });
    }

    // Menambahkan pengguna
    $('#addForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'add_user.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response){
                $('#addModal').modal('hide');
                loadUserTable();
            }
        });
    });

    // Menampilkan modal edit pengguna
    $(document).on('click', '.editBtn', function(){
        var userId = $(this).data('id');
        $.ajax({
            url: 'get_user.php',
            type: 'GET',
            data: {id: userId},
            success: function(response){
                var user = JSON.parse(response);
                $('#editId').val(user.id);
                $('#editUsername').val(user.username);
                $('#editEmail').val(user.email);
                $('#editModal').modal('show');
            }
        });
    });

    // Mengedit pengguna
    $('#editForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'edit_user.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response){
                $('#editModal').modal('hide');
                loadUserTable();
            }
        });
    });

    // Menghapus pengguna
    $(document).on('click', '.deleteBtn', function(){
        var userId = $(this).data('id');
        if(confirm('Anda yakin ingin menghapus pengguna ini?')){
            $.ajax({
                url: 'delete_user.php',
                type: 'POST',
                data: {id: userId},
                success: function(response){
                    loadUserTable();
                }
            });
        }
    });
});
