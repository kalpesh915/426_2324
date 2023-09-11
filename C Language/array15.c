#include<stdio.h>

/**
    create Simple 2 Dimentional Array and initlialize
    values in single brackets

    int ip[3][3]

    ip
        0   1   2
    0   11  22  33
    1   44  55  66
    2   77  88  99
*/

#define size 3

void main(){
    int ip[size][size] = {11, 22, 33, 44, 55, 66, 77, 88, 99};
    printf("\n value is %d", ip[1][2]); ///row, column
}
