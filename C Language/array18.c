#include<stdio.h>

/**
    get value from user and store in 2D Array
    make sum of 2D array
*/

#define size 3

void main(){
    int ip[size][size], i, j, sum=0;

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// print data from array
    printf("\n");
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            sum = sum + ip[i][j];
        }
    }

    printf("\n Sum of array is %d ", sum);
}
