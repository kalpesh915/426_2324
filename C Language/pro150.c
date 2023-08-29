#include<stdio.h>

/**
    create custom loop with goto label
*/

void main(){
    int i = 1;

    loop:
        printf(" %d", i);
        i++;

        if(i <= 10){
            goto loop;
        }
}
