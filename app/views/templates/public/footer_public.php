<footer class=" container-fluid bg-dark rounded shadow">
<div class="container-fluid">
  <div class="row text-center">
    <div class="col-3 mt-3  text-start">
        <img class="ms-5" width="70px" height="70px" src="<?= BASEURL ?>/img/logosari.jpg" alt="">
    <h3 class="mt-1 text-light">Sari Pasundan</h3>
    <div class="text-start">
        <a class="mx-1 text-decoration-none text-light" href="<?= BASEURL ?>/home">Home</a>
        <a class="mx-1 text-decoration-none text-light" href="<?= BASEURL ?>/catalog ">Produk</a>
        <a class="mx-1 text-decoration-none text-light" href="<?= BASEURL ?>/about">About</a>
    </div>
    </div>
    <div class="col-6">
    <svg class="mt-2 text-center" style="width:50px;height:50px; margin-bottom:20px;margin-top:-10;color:rgb(255, 0, 21);" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z" />
            </svg>
            <p class="text-light fw-bold">50 Meter Dari SPBU, Sebelah NAGA SWALAYAN, Jl. Paus, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124</p>
    </div>
    <div class="col-3 text-end mt-2">
    <h4 class="text-light fw-bold">About the Company</h4>
    <p class="text-light">Kue Balok Coklat No. 1 dan Terbesar di Indonesia dengan banyak outlet yang terseber di beberapa daerah di Indonesia</p>
    </div>
  </div>
</div>

</footer>



<script src="<?= BASEURL  ?>/js/sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL ?>/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="<?= BASEURL  ?>/js/script.js"></script>
<script src="<?= BASEURL  ?>/vendor/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
 $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>