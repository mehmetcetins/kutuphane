
#include<stdio.h>
#include<string.h>


typedef struct{
    char tel[15];
    char ad[20];
    char soyad[20];
    
} abone;
abone a1;

yaz(char dosya[20]){
    abone a2;
    FILE *f;
    f = fopen(dosya,"r");
    fread(&a2,sizeof(a2),1,f);
    while(feof(f) == 0){
        printf("isim %10s soyisim %10s tel %10s\n",a2.ad,a2.soyad,a2.tel);
        fread(&a2,sizeof(a2),1,f);
    }
    
    fclose(f);

}

main(){
FILE *fg,*fg1;
    
    strcpy(a1.tel,"1010101010");
    strcpy(a1.ad,"mehmet");
    strcpy(a1.soyad,"cetin");

    fg = fopen("s.dat","w");
    if(fg==NULL){
        printf("dosya acilamiyor");
        exit(1);
    }
    int i;
    for (i=0;i<2;i++){
        if(fwrite(&a1,sizeof(a1),1,fg) != 1){
            printf("\n kayit hatasi");
            exit(1);
        }
        strcpy(a1.tel,"1010101011");
        strcpy(a1.ad,"duygu");
        strcpy(a1.soyad,"kizanlik");
    }

    printf("\nbitti\n");
    
    fclose(fg);
    // buraya kadar dosya oluşturuldu ve dosyayaya kayıt yazıldı.

    yaz("s.dat"); // kayıtları okuma fonksiyonu

    /*
    1.dosyayı okuma modunda aç
    2.gecici bir dosyayı yazma modunda aç
    3.degistirilicek numarayı kullanıcıdan al
    4.dosyayı okumaya basla
    5.okunan veriyi numarayla ile karsilastir evet ise kullanicidan isim,soyismi ve numarayı al hayır ise devam et.
    6.kayıtları gecici dosyaya yazdir.
    7.bir sonraki kaydı oku.
    8.dosyayının sonuna gelinmemişse 5.adıma dön gelinmişse 9. adımdan devam et.
    9.dosyaları kapat.
    10.dosyayı sil
    11.gecici dosya ile dosyanın adının değiştir.
    */

    //1.
    fg = fopen("s.dat","r");  
    if(fg == NULL){
        printf("dosya acilamiyor");exit(1);
    }   
    //2.
    fg1 = fopen("gecici.dat","w");
    if(fg1 == NULL){
        printf("dosya acilamiyor");exit(1);
    }
    //3.
    char aranilan[15];
    printf("kaydi degistirilicek telefon numarasi: ");scanf("%s",aranilan);
    //4.
    fread(&a1,sizeof(a1),1,fg);// fread fonksiyonu her çalıştırıldığında verilmiş byte kadar bir sonraki  yeri okur.
    while(/*8.*/ (feof(fg)) == 0){
        //5.     
        if(strcmp(a1.tel,aranilan) == 0){
            printf("tel :");scanf("%s",&a1.tel);
            printf("adi :");scanf("%s",&a1.ad);
            printf("soyadi :");scanf("%s",&a1.soyad);
            
            
        }
        //6.
        if(fwrite(&a1,sizeof(a1),1,fg1) != 1){
            printf("kayit hatasi");
            exit(1);
            }

        //7.
        fread(&a1,sizeof(a1),1,fg);// fread fonksiyonu her çalıştırıldığında verilmiş byte kadar bir sonraki  yeri okur.
        
    }
    //9.
    fclose(fg);
    fclose(fg1);
    //10.
    remove("s.dat");
    //11.
    rename("gecici.dat","s.dat");
    yaz("s.dat");
    getch();
}
