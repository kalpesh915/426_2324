#include<stdio.h>
/// local variable

void main(){
    int ip = 10;

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
