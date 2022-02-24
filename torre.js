var torre1 = 1;
var torre2 = 2;
var torre3 = 3
var n = 3; //Numero de discos que tien la torre

hanoi(n, torre1, torre2, torre3);

function hanoi(n , ori, des, aux ){

if(n == 1 )
document.write("Mueve el disco" + n + "desde la torre " + ori + "hasta la torre " + des + "<br>");
else{

    hanoi(n-1, ori, aux, des,);
    document.write("Mueve el disco" + n + "desde la torre " + ori + "hasta la torre " + des + "<br>");
  // se mueve n-1 desciso de aux a des
    hanoi(n - 1, aux, des, ori)
    
}

}
