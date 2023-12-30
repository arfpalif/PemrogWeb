function calculate(){
    kode = document.getElementById("kode").value;
    Count = document.getElementById("Count").value;        
    
    harga = 0;

    switch(kode){
        case "001" :
            harga = 10000;
            break;
        case "002": 
            harga = 20000;
            break;
        case "003":
            harga = 30000;
            break;         
    }

    subtotal = harga * Count;
    alert("Subtotal anda adalah " + subtotal);

    ;

    uang = prompt("Subtotal anda adalah "+ subtotal +"\nMasukkan jumlah uang anda : ") 
    if(isNaN(uang)){
        alert ("Uang tidak valid");
        return;
    }

    kembalian = uang - subtotal;

    if(kembalian < 0) {
        alert("Uang mu ga cukup");
    }
    else{
        alert("Kembalian mu adalah " + kembalian);
    }
        
            
}   