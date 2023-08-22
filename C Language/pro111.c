#include<stdio.h>

/**
    for(init; condition; increment | decrement){
        loop body
    }
*/

void main(){
    int i;

    for(i=1; i<=10; i+=2){
        printf(" %d", i);
    }
}
