#include<stdio.h>

/**
    pointer to array
*/

void main(){
    int ip[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr, i;

    ptr = &ip;

    for(i=0; i<10; i++){
        printf("\n value is %d and address is %d", *ptr, ptr);
        ptr++;
    }
}
