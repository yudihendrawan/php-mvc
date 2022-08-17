$(function() {
    //jquery Admin
    $('.tambahDataAdmin').on('click', function() {
        $('#formModalLabel').html('Tambah Data Admin');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#np').val('');
        $('#nama_admin').val('');
        $('#shift_admin').val('');
        $('#id_admin').val('');
    });

    $('.ubahAdmin').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Admin');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/sari_pasundan/public/admin/ubah');

        const id_admin= $(this).data('id');
        console.log(id_admin);
        $.ajax({
            url: 'http://localhost/sari_pasundan/public/admin/getubah',
            data: {id_admin : id_admin},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#np').val(data.np);
                $('#nama_admin').val(data.nama_admin);
                $('#shift_admin').val(data.shift_admin);
                $('#id_admin').val(data.id_admin);
        }
    });
});

    // jquery Customer
    $('.tambahDataCustomer').on('click', function() {
        $('#formModalLabel').html('Tambah Data Member');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_customer').val('');
        $('#tlp_customer').val('');
        $('#id_customer').val('');
    });

    $('.ubahCustomer').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Member');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/sari_pasundan/public/customer/ubah');

        const id_customer= $(this).data('id');
        console.log(id_customer);
        $.ajax({
            url: 'http://localhost/sari_pasundan/public/customer/getubah',
            data: {id_customer : id_customer},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama_customer').val(data.nama_customer);
                $('#tlp_customer').val(data.tlp_customer);
                $('#id_customer').val(data.id_customer);
            }
        });
    });

    // jquery produk
    $('.tambahProduk').on('click', function() {
        $('#formModalLabel').html('Tambah Data Produk');
        $('.gproduk').css('display','none');
        $('.info').html('');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_produk').val('');
        $('#harga_produk').val('');
        $('#jumlah_produk').val('');
        $('#deskripsi').val('');
        $('#id_customer').val('');
    });
    $('.ubahProduk').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Produk');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.info').html('Mohon foto di upload ulang');
        $('.gproduk').css('display','block');
        $('.modal-body form').attr('action', 'http://localhost/sari_pasundan/public/produk/ubah');
        // let des = CKEDITOR.instance[]
        // CKEDITOR.replace('editor');
        // let Content = CKEDITOR.instances['editor'].getData();
        const id_produk= $(this).data('id');
        console.log(id_produk);
        $.ajax({
            url: 'http://localhost/sari_pasundan/public/produk/getubah',
            data: {id_produk : id_produk},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                // console.log(data.deskripsi);
                $('#id_produk').val(data.id_produk);
                $('#nama_produk').val(data.nama_produk);
                $('#harga_produk').val(data.harga_produk);
                $('#jumlah_produk').val(data.jumlah_produk);
                $('#deskripsi').val(data.deskripsi);
                let nilai = data.gambar_produk;
                $('.gproduk').attr('src','http://localhost/sari_pasundan/public/img/produk/'+nilai);
                // let des = text.replace('&', '&amp', data.deskripsi);
                // $('#editor').val(data.deskripsi);
            }
        });
        });
        // jquery promo
        $('.tambahPromo').on('click', function() {
            $('#formModalLabel').html('Tambah Data Promo');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama_promo').val('');
            $('#jumlah_potongan').val('');
            $('#id_promo').val('');
        });
        $('.ubahPromo').on('click', function() {
        
            $('#formModalLabel').html('Ubah Data Promo');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', 'http://localhost/sari_pasundan/public/promo/ubah');
    
            const id_promo= $(this).data('id');
            console.log(id_promo);
            $.ajax({
                url: 'http://localhost/sari_pasundan/public/promo/getubah',
                data: {id_promo : id_promo},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    console.log(data.deskripsi);
                    $('#nama_promo').val(data.nama_promo);
                    $('#jumlah_potongan').val(data.jumlah_potongan);
                }
            });
            });

            // jquery transaksi
    // $('.tambahTransaksi').on('click', function() {
    //     $('#formModalLabel').html('Tambah Data Transaksi');
    //     $('.modal-footer button[type=submit]').html('Tambah Data');
    //     $('#nama_customer').val('');
    //     $('#nama_produk').val('');
    //     $('#jumlah_pesanan').val('');
    // });
    // $('.ubahTransaksi').on('click', function() {
        
    //     $('#formModalLabel').html('Ubah Data Transaksi');
    //     $('.modal-footer button[type=submit]').html('Ubah Data');
    //     $('.modal-body form').attr('action', 'http://localhost/sari_pasundan/public/transaksi/ubah');

    //     const id_penjualan= $(this).data('id');
    //     console.log(id_penjualan);
    //     $.ajax({
    //         url: 'http://localhost/sari_pasundan/public/transaksi/getubah',
    //         data: {id_penjualan : id_penjualan},
    //         method: 'post',
    //         dataType: 'json',
    //         success: function(data) {
    //             console.log(data.deskripsi);
    //             $('#selected').val(data.nama_customer);
    //             $('#nama_customer').val(data.nama_customer);
    //             $('#nama_produk').val(data.nama_produk);
    //             $('#jumlah_pesanan').val(data.jumlah_pesanan);
    //         }
    //     });

    // });

});