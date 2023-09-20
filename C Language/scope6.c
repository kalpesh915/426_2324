#include<stdio.h>

/// example of register variable


void main(){
    register int ip1; /// might be store on CPU register
    ip1 = 100;
    printf("\n value of ip1 is %d ", ip1);
}
