#include<stdio.h>

/**
    merge two array in 3rd array
*/

#define size 10

void main(){
    int ip1[size], ip2[size], ip3[size], i;

    /// get data in array ip1
    printf("\n Enter values for ip1 ");
    for(i=0; i<size; i++){
        printf("\nEnter value for ip1[%d] \t", i);
        scanf("%d", &ip1[i]);
    }

    printf("\n Enter values for ip2 ");
    for(i=0; i<size; i++){
        printf("\nEnter value for ip2[%d] \t", i);
        scanf("%d", &ip2[i]);
    }

    /// separate values
    for(i=0; i<size; i++){
        ip3[i] = ip1[i] + ip2[i];
    }

    for(i=0; i<size; i++){
        printf("\n ip1[%d] : %d + ip2[%d] : %d = ip3[%d] : %d", i, ip1[i], i, ip2[i], i, ip3[i]);
    }
}
