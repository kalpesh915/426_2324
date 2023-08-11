#include<stdio.h>

/**
    bitwise not operator
    inverse the bits
*/

void main(){
    int ip1, ans;

    ip1 = 10;
    ///     0000 0000 0000 0000 0000 0000 0000 1010
    ans = ~ip1;
    ///     1111 1111 1111 1111 1111 1111 1111 0101
    printf("\n Answer is %d", ans);
}

