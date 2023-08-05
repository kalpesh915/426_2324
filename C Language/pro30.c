#include<stdio.h>
/// constant variable

void main(){
    const int ip = 10;
    printf("\n value of ip is %d", ip);
    ip =15; /// error
    printf("\n value of ip is %d", ip);
}
