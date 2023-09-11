#include<stdio.h>

/**
    get value from user and store in 2D Array
    find max of 2D array
*/

#define size 3

void main(){
    int ip[size][size], i, j, max=0;

    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    printf("\n");
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(max < ip[i][j]){
                max = ip[i][j];
            }
        }
    }

    printf("\n Max of array is %d ", max);
}
