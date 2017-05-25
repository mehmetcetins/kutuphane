$(document).ready(function(){

    $(".buttonx").click(function(){
        var numara = $("input[name='ogrenci']").val();
        var tarih = $("input[type='date']").val();
        $(".warningx").css("display","block");
        $(".warning p").text(numara+" numaralı öğrenci "+book.ad+" isimli kitabı "+tarih+ " tarihinde teslim etmek üzere ödünç alıyor onaylıyor musunuz?");
    
        return false;
    })

    $(".cancel").click(function(){
        $(".warningx").css("display","none");
       return false; 
    });

    $(".give").click(function(){
        $(".warningx").css("display","block");
        var numara = $(this).attr('o-numara');
        var kitap = $(this).attr('o-kitap');
        var tarih = new Date().toLocaleDateString();
        var href = $(this).attr("href");
        $(".warning p").html(numara + " numaralı öğrenci " + kitap + " isimli kitabı bugün (" + tarih + ") teslim ediyor. Onaylıyor musunuz ?");
        $(".accept").attr('href', href);
        
        return false;


    });

});

