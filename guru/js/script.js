// //ambil dulu elemen elemen yang dibutuhkan
// var keyword = document.getElementById('keyword');
// var tombolCrai = document.getElementById('tombol-cari');
// var pembungkus = document.getElementById('pembungkus');

// //tambahkan event ketika keyword ditulis
// keyword.addEventListener('keyup', function(){

//     //buat object ajax
//     // XMLHttpRequest adalah objeck yang menegelola request kita menggunakan teknik ajaxs
//     var xhr = new XMLHttpRequest();

//     //cek kesiapan ajax
//     xhr.onreadystatechange = function() {
//         if ( xhr.readyState == 4 && xhr.status == 200 ){
//             pembungkus.innerHTML = xhr.responseText;
//         }
//     }

//     //eksekusi ajax
//     xhr.open('GET', 'ajax/guru.php?keyword=' + keyword.value, true);
//     xhr.send();

// });


$(document).ready(function(){

    //event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        $('#pembungkus').load('ajax/guru.php?keyword=' + $('#keyword').val());
    });

});