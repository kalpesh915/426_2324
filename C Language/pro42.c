/**
    print ASCII of entered character
*/

#include<stdio.h>

void main(){
    char ip;

    printf("\n Enter any character \t");
    ip = getche();
    printf("\n Character is %c and ASCII is %d", ip, ip);
}
