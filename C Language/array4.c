#include<stdio.h>

/**
    create array of 10 elements and get values from
    user
*/

#define size 10

void main(){

    int ip[size], i;

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        printf("\n ip[%d] = %d", i, ip[i]);
    }
}
