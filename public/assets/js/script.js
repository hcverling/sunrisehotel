$(document).ready(function(){
    const form = $('#reservation-form');

    $("#submit").click(function(event){
        event.preventDefault();

        const nama = $('#nama-lengkap').val();
        const no_hp = $('#nomor-hp').val();
        const alamat = $('#alamat').val();
        const tanggal_check_in = $('#tgl-check-in').val();
        const tanggal_check_out = $('#tgl-check-out').val();
        const jumlah_pengunjung = $('#jumlah-pengunjung').val();

        let warning = '';

        if(nama === ''){
           warning += '<li>Nama lengkap harus di isi</li>';
        }

        if(no_hp === ''){
            warning += '<li>NO Hp harus di isi</li>';
        }

        

        if(alamat === ''){
            warning += '<li>Alamat harus di isi</li>';
            
        }

        if(tanggal_check_in === ''){
            warning += '<li>Tanggal check in harus di isi</li>';
            
        }

        if(tanggal_check_out === ''){
            warning += '<li>Tanggal check out harus di isi</li>';
        }

        if(jumlah_pengunjung === ''){
            warning += '<li>Jumlah pengunjung harus di isi</li>';
        }

        if(warning != ''){
            $("#popup #warning-message").append(warning);
            $("#popup").fadeIn();
        }else{
            $.ajax({
                url:"submit.php",
                type: "POST",
                data: form.serialize(),
                dataType: "json",
                success: function(response){
                   
                    if(response.status === 200){
                       
                        $('<div class="alert alert-success">'+response.message+'</div>').insertAfter($("#warning-message"));
                        $("#popup").fadeIn();
                    }else if(response.status === 400){
                       
                        $('<div class="alert alert-danger">'+response.message+'</div>').insertAfter($("#warning-message"));
                        $("#popup").fadeIn();
                    }
                },
                error:function(status, error){
                    console.log('Error:', error);
                }
            });
        }

       


    });

    $(".close").click(function(){
        $("#popup #warning-message").empty();
        $("#popup").fadeOut();
    });

    /*$('#jumlah-pengunjung').keyup(function(){
        let jumlah_pengunjung = $(this).val();
       
        let new_input = '';
        for(i=1; i <= jumlah_pengunjung; i++){
            new_input += '<label for="jumlah-pengunjung">Nama Pengunjung ke' + i + '</label>';
            new_input += '<input type="text" name="" id="">';
        }

        $("#additional-input").append(new_input);
        
        //new_input.insertAfter($("#jumlah-pengunjung"));
    });*/
    
});


