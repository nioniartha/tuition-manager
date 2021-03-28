
/* VARIABLE */
var baseUrl = $('meta[name="base-url"]').attr('content');
var showAlert = true;
let nominal_nioni;
var arrayMonth = [
            'bulan',
            'Jul', 
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun'
    ];

    $("#payment").hide();

    $(document).ready(function() {

        /* SET TEXT JUMLAH BAYAR */
        $("#monthsToBePaid").on("input", function() {
            var qty_nioni =$(this).val();
            var amount_nioni = (qty_nioni * nominal_nioni)
            
            $('.total').text(formatRupiah(amount_nioni));
            document.getElementById("jumlahBayar").value = amount_nioni;
        });
        
        
    });

    $('.cari').change(function() {

    });
    $('.cari').select2({
        placeholder: 'Search...',
        ajax: {
        url: baseUrl + 'payment/cari',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
            results:  $.map(data, function (item) {
                return {
                    text: item.nisn + " - " + item.nama,
                    id: item.id_siswa
                }
            })
            };
        },
        cache: true
        }
    });

    function itemSppRed(printBulan) {
        return '<label class="option">' +
                    '<div class="basicBox red" id="basicBoxHover">' +
                        '<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">' +
                            '<rect class="red" x="0" y="0" fill="none" width="130" height="65"/>' +
                        '</svg>' +
                        printBulan +
                    '</div>' +
                '</label>'    
    } //end ItemSpp

    function itemSppBlue(printBulan) {
        console.log('printBulan' + printBulan);
        return '<label class="option">' +
                '<div class="basicBox">' +
                    '<svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">' +
                        '<rect x="0" y="0" fill="none" width="130" height="65"/>' +
                    '</svg>' +
                    printBulan +
                '</div>' +
            '</label>' 
           
    } //end ItemSpp

    function block(mClass, html) {
        //extra html you want to store.
        return '<li class="nav-item"><a class="nav-link" data-toggle="tab" href=#' + mClass + '>' + html + '</a></li>'
   
    }

    $("#searchStudent").change(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
        });
        $.ajax({
            type: "POST",
            url: baseUrl + 'payment/search',
            data: { 
                data: $("#searchStudent").val() 
            },
            dataType: 'json',
            success: function(response) {
            // use console.log for debugging, and access the property of the deserialised object
                console.log(response);
                $.each(response['data-siswa'], function(index, element) {

                    /* SET TEXT PROFILE STUDENT */
                    $("#name").text(element.nama);
                    $("#nisn").text("Nisn : " + element.nisn);
                    $("#nis").text("Nis : " + element.nis);
                    $("#class").text("Class : " + element.kelas.kelas + " " + element.kelas.vocational.jurusan + " " + element.kelas.nama_kelas);
                    $("#payment").show();
                    
                    /* SET VALUE INPUT TRANSACTION */
                    document.getElementById("yearInput").value = element.tuition.tahun;
                    document.getElementById("idStudent").value = element.id_siswa;
                    document.getElementById("idSpp").value = element.tuition.id_spp;
                    nominal_nioni = element.tuition.nominal;

                    var ul = document.getElementById('tab-tahun');
                    var date = parseInt(element.tuition.tahun);
                    var date2 = date + 1;
                    var i;
                    for(i = date; i < date2 + 2; i++){
                        console.log(i + ' - ' + (i + 1));
                        // ul.innerHTML += block(i, i +'-' +(i+1));
                        
                    }// end for

                    
                }); // end eachDataSiswa
                
                var divCardSpp = document.getElementById('cardspp');
                var sppSudahBayarNioni = response['transaksi'].bulan_sudah_bayar;
                console.log('Sisa bulan bayar' + response['transaksi'].bulan_sudah_bayar);

                for (i = 0; i < arrayMonth.length; i++) {
                    if(i <= sppSudahBayarNioni) {
                        console.log('ini i if' + i);
                        if(arrayMonth[i] != 'bulan') {
                            divCardSpp.innerHTML += itemSppBlue(arrayMonth[i]);
                        }
                    } else {
                        console.log('ini i else' + i);
                        divCardSpp.innerHTML += itemSppRed(arrayMonth[i]);
                    }
                } // end for 


            }
        });
    });
    
    const formatRupiah = (money) => {
    return new Intl.NumberFormat('id-ID',
            { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }
        ).format(money);
    }

     // for checkbox
     $('div[type="checkbox"]').on('change', (event) => {
        const name = event.target.name;
        const values = [];
        $('div[name="' + name + '"]:checked').each((index, input) => {
            values.push($(input).val());
        });
        if(!showAlert) return;
        // print
        if(values.length) {
        swal({
            title: event.target.name,
            type: 'success',
            html: 'value: <strong>' + JSON.stringify(values) + '</strong>',
            confirmButtonText: 'okay'
        })
        } else {
        swal({
            title: event.target.name,
            type: 'warning',
            html: 'Please choose a social',
            confirmButtonText: 'okay'
        })
        }
    });