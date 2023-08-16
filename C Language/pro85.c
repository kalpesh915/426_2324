#include<stdio.h>

/**
    find profit or loss from entered purchase
    and sales price
*/

void main(){
    int pp, sp, pl;

    printf("\n Enter purchase price \t");
    scanf("%d", &pp);
    printf("\n Enter sales price \t");
    scanf("%d", &sp);

    pl = sp - pp;

    if(pl > 0){
        printf("\n profit");
    }else if(pl < 0){
        printf("\n loss");
    }else{
        printf("\n no profit no loss");
    }
}
