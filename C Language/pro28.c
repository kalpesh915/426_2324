#include<stdio.h>
/// global variable

int ip = 100; /// global

void main(){
    int ip = 10; /// local

    printf("\n value of ip is %d", ip);

    {
        int ip = 15; /// local
        printf("\n value of ip is %d", ip);
    }

    {
        int ip = 20; /// local
        printf("\n value of ip is %d", ip);
    }

    printf("\n value of ip is %d", ip);
}
