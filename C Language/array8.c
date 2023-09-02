#include<stdio.h>

/**
    find average of array
*/

#define size 10

void main(){
    int ip[size], i, sum = 0;

    /// get values in array
    for(i=0; i<size; i++){
        printf("\nEnter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// making sum of array
    for(i=0; i<size; i++){
        sum += ip[i];
    }
    printf("\n Sum of Array is %d", sum);
    printf("\n Average of Array is %d", sum / size);
}
