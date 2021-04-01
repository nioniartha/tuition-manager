
/* VARIABLE */
var baseUrl = $('meta[name="base-url"]').attr('content');
var showAlert = true;
let nominal_nioni;
var tahunBayarSppTerakhir;
var sppSudahBayarNioni;
var x_nioni, xi_nioni, xii_nioni;

$("#tab-history_kelas_x").hide();
$("#tab-history_kelas_xi").hide();


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

    
    $('.cari').select2({
        placeholder: 'Search by name/nisn...',
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

    function showFormPayment() {
        return '<form id="form_validation" action="{{route("payment.bayar")}}" method="post" enctype="multipart/form-data">' + 
                    '{{csrf_field()}}' +
                    '<div class="form-group form-float">' +
                        '<input type="number" class="form-control" id="monthsToBePaid" placeholder="Months to be paid" name="monthsToBePaid" required>' +
                    '</div>' +
                    '<input type="hidden" id="yearInput" name="yearInput"></input>' +
                    '<input type="hidden" id="jumlahBayar" name="jumlahBayar"></input>' +
                    '<input type="hidden" id="idPetugas" name="idPetugas" value="{{ Auth::guard("admin")->user()->id_petugas }}"></input>'  + 
                    '<input type="hidden" id="idStudent" name="idStudent"></input>' +
                    '<input type="hidden" id="idSpp" name="idSpp"></input>' + 
                    '<hr>' +               
                    '<ul class="list-unstyled">' +
                        '<li><strong>Sub-Total :</strong> </li>' +
                    '</ul>' +
                    '<h4 class="mb-0 text-danger total"></h4>' +
                    '<div class="modal-footer">' +
                        '<a href="javascript:void(0);" class="btn btn-info"><i class="zmdi zmdi-print"></i></a>' +
                        '<button class="btn btn-raised btn-primary waves-effect" type="submit">Submit</button>' +
                    '</div>' +
            '</form>'
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
                var divCardSpp = document.getElementById('cardspp');
                var history_x = document.getElementById('history_kelas_x');
                var history_xi = document.getElementById('history_kelas_xi');

                $.each(response['data-siswa'], function(index, element) {

                    /* SET TEXT PROFILE STUDENT */
                    $("#name").text(element.nama);
                    $("#nisn").text("Nisn : " + element.nisn);
                    $("#nis").text("Nis : " + element.nis);
                    $("#class").text("Class : " + element.kelas.kelas + " " + element.kelas.vocational.jurusan + " " + element.kelas.nama_kelas);
                    $("#payment").show();
                    
                    /* SET VALUE INPUT TRANSACTION */
                    if (response['transaksi'] != null) {
                        if(response['transaksi'].bulan_sudah_bayar != 12) {
                            sppSudahBayarNioni = response['transaksi'].bulan_sudah_bayar;
                        } else {
                            sppSudahBayarNioni = 0;
                        }
                        tahunBayarSppTerakhir = parseInt(response['transaksi'].tahun_dibayar);
                    } else {
                        sppSudahBayarNioni = 0;
                        tahunBayarSppTerakhir = parseInt(element.tuition.tahun);
                    }

                    document.getElementById("idStudent").value = element.id_siswa;
                    document.getElementById("idSpp").value = element.tuition.id_spp;
                    nominal_nioni = element.tuition.nominal;
                    document.getElementById("yearInput").value = tahunBayarSppTerakhir;


                    x_nioni = parseInt(element.tuition.tahun);
                    xi_nioni = parseInt(element.tuition.tahun) + 1;
                    xii_nioni = parseInt(element.tuition.tahun) + 2;

                    if(response['transaksi'] != null) {
                        if(tahunBayarSppTerakhir == xi_nioni || xii_nioni && response['transaksi'].bulan_sudah_bayar == 12) {
                            console.log('ini if loh');  
                            $("#tab-harus-bayar").text((parseInt(tahunBayarSppTerakhir) + 1) + '-' + (parseInt(tahunBayarSppTerakhir) + 2));
                            for (i = 0; i < arrayMonth.length; i++) {
                                if(i <= sppSudahBayarNioni) {
                                    // console.log('ini i if' + i);
                                    if(arrayMonth[i] != 'bulan') {
                                        // console.log('sudah bayar' + arrayMonth[i]);
                                        divCardSpp.innerHTML += itemSppBlue(arrayMonth[i]);
                                    }
                                } else {
                                    // console.log('ini i else' + i);
                                    divCardSpp.innerHTML += itemSppRed(arrayMonth[i]);
                                }
                            } // end for 
                        } else {
                            $("#tab-harus-bayar").text(tahunBayarSppTerakhir + '-' + (parseInt(tahunBayarSppTerakhir) + 1));
                            for (i = 0; i < arrayMonth.length; i++) {
                                if(i <= sppSudahBayarNioni) {
                                    // console.log('ini i if' + i);
                                    if(arrayMonth[i] != 'bulan') {
                                        // console.log('sudah bayar' + arrayMonth[i]);
                                        divCardSpp.innerHTML += itemSppBlue(arrayMonth[i]);
                                    }
                                } else {
                                    // console.log('ini i else' + i);
                                    divCardSpp.innerHTML += itemSppRed(arrayMonth[i]);
                                }
                            } // end for 
                        }
                    } else {
                        console.log('masuk zona merah');
                        $("#tab-harus-bayar").text(tahunBayarSppTerakhir + '-' + (parseInt(tahunBayarSppTerakhir) + 1));
                        for (i = 0; i < arrayMonth.length; i++) {
                            if(arrayMonth[i] != 'bulan') {
                                // console.log('sudah bayar' + arrayMonth[i]);
                                divCardSpp.innerHTML += itemSppRed(arrayMonth[i]);
                            }
                        } // end for
                    }
                    

                    var ul = document.getElementById('tab-tahun');
                    var date = parseInt(element.tuition.tahun);
                    var date2 = date + 1;
                    var i;
                    for(i = date; i < date2 + 2; i++){
                        console.log(i + ' - ' + (i + 1));
                        // ul.innerHTML += block(i, i +'-' +(i+1));
                        
                    }// end for
   
                }); // end eachDataSiswa
                

                
                
                /* SET HISTORY TRANSACTION */
                var history_nioni = response['history'];
                var item_history_per_tahun;

                if(history_nioni != null) {
                    $.each(history_nioni, function(index, element) {
                        item_history_per_tahun = history_nioni[index];
                        console.log('tahun history'+item_history_per_tahun.tahun_dibayar);
                        if(item_history_per_tahun.tahun_dibayar == x_nioni) {
                            console.log('true x');
                            $("#tab-history_kelas_x").show();
                            $("#tab-history_kelas_x").text(x_nioni + '-' + (parseInt(x_nioni) + 1));

                            for (i = 0; i < arrayMonth.length; i++) {
                                if(arrayMonth[i] != 'bulan') {
                                    console.log('sudah bayar' + arrayMonth[i]);
                                    history_x.innerHTML += itemSppBlue(arrayMonth[i]);
                                }
                            } // end for
                        }

                        if(item_history_per_tahun.tahun_dibayar == xi_nioni) {
                            console.log('true xi');
                            $("#tab-history_kelas_xi").show();
                            $("#tab-history_kelas_xi").text(xi_nioni + '-' + (parseInt(xi_nioni) + 1));

                            for (i = 0; i < arrayMonth.length; i++) {
                                if(arrayMonth[i] != 'bulan') {
                                    // console.log('sudah bayar' + arrayMonth[i]);
                                    history_xi.innerHTML += itemSppBlue(arrayMonth[i]);
                                }
                            } // end for
                        }
                    });
                } else {
                    $("#tab-harus-bayar").text(tahunBayarSppTerakhir + '-' + (parseInt(tahunBayarSppTerakhir) + 1));
                    for (i = 0; i < arrayMonth.length; i++) {
                        if(arrayMonth[i] != 'bulan') {
                            // console.log('sudah bayar' + arrayMonth[i]);
                            history_xi.innerHTML += itemSppRed(arrayMonth[i]);
                        }
                    } // end for
                }

            } // end succes
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