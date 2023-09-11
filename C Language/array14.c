#include<stdio.h>

/**
    Simple 2 Dimentional Array

    int ip[3][3]

    ip
        0   1   2
    0   11  22  33
    1   44  55  66
    2   77  88  99
*/

#define size 3

void main(){
    int ip[size][size];
    printf("\n Size of array is %d bytes", sizeof(ip));
}
