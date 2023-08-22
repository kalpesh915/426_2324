#include<stdio.h>

/**
    print All ASCII values with for loop
    0 to 255
*/

void main(){
    int i;

    for(i=0; i<=255; i++){
        printf(" %d = %c", i, i);
    }
}
