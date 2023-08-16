#include<stdio.h>

/**
    calculate light bill

    units           rate
    000-100         10
    101-200         11
    201-300         12
    300-NNN         13

    110

    100 * 10    =   1000
    010 * 11    =   0110
                    1110
*/

void main(){
    int units, tmp, bill;

    printf("\n Enter units \t");
    scanf("%d", &units);

    if(units >= 0 && units <= 100){
        bill = units * 10;
    }else if(units > 100 && units <= 200){
        tmp = units - 100;
        bill = tmp * 11 + (100 * 10);
    }else if(units > 200 && units <= 300){
        tmp = units - 200;
        bill = tmp * 12 + (100 * 10 + 100 * 11);
    }else if(units > 300){
        tmp = units - 300;
        bill = tmp * 13 + ((100 * 10) + (100 * 11) + (100 * 12));
    }

    printf("\n Payable amount is %d", bill);
}
