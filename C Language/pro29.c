#include<stdio.h>
/// global variable

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
