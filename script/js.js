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


});

