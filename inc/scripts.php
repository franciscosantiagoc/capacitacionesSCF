<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
</script>
<script>
    let datnow=moment().format('DD/MM/YYYY HH:mm');
    let inputd=document.querySelector('input[name="fechacap"]');
    /* inputd.addEventListener('change',e=>{
        alert('fecha seleccionada='+inputd.value)
    }) */
    inputd.min=datnow;
</script>