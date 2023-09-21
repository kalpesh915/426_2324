#include<stdio.h>

/**
    double pointer
*/

void main(){
    int ip1, ip2, *ptr, **pptr;

    ip1 = 10;
    ptr = &ip1;
    pptr = &ptr;
    printf("\n **pptr is %d", **pptr);

    ip2 = 20;
    ptr = &ip2;
    printf("\n **pptr is %d", **pptr);
}
