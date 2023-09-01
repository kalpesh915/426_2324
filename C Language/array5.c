#include<stdio.h>

/**
    create array of 10 elements and get values from
    user and print sum of it
*/

#define size 10

void main(){

    int ip[size], i, sum=0;

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        sum = sum + ip[i];
    }

    printf("\n Sum of Array is %d", sum);
}
