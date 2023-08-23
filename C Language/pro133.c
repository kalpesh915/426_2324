#include<stdio.h>

/**
    print following pattern with nested for loop

    A
    B C
    D E F
    G H I J
    K L M N O
*/

void main(){
    int i, j, count = 65;

    for(i=1; i<=5; i++){
        for(j=1; j<=i; j++){
            printf("%c ", count++);
        }
        printf("\n");
    }
}
