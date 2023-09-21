#include<stdio.h>

void main(){
    int ip = 10, *ptr;

    printf("\n value of ip is %d", ip);
    printf("\n Address of ip is %d", &ip);

    /// assign address of ip to ptr pointer
    ptr = &ip;

    printf("\n value of ptr is %d", ptr);
    printf("\n Address of ptr is %d", &ptr);
}
