#include<stdio.h>

/**
    const variable cannot modified
*/

void main(){
   const int ip = 10;
   printf("\n value of ip is %d", ip);
   ip =20;
   printf("\n value of ip is %d", ip);
}
