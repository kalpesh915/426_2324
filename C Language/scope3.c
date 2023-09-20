#include<stdio.h>

/// example of global scope

int ip = 100; /// global

void main(){

    printf("\n value of ip is %d", ip);

    {
        printf("\n value of ip is %d", ip);
    }

    {
        printf("\n value of ip is %d", ip);
    }

    printf("\n value of ip is %d", ip);
}
