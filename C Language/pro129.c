#include<stdio.h>

/**
    print following pattern with nested for loop

    A
    AB
    ABC
    ABCD
    ABCDE

    A = 65
*/

void main(){
    int i, j;

    for(i=65; i<=69; i++){
        for(j=65; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }
}
