#include<stdio.h>

/**
    sort array in ascending order
*/

#define size 10

void main(){
    int ip[size], i, j, tmp;


    /// scan values in array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }


    /// sorting process
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(ip[i] < ip[j]){
                tmp = ip[i];
                ip[i] = ip[j];
                ip[j] = tmp;
            }
        }
    }

    /// print sorted data
    printf("\n Sorted data is \n");
    for(i=0; i<size; i++){
        printf(" %d",ip[i]);
    }
}
