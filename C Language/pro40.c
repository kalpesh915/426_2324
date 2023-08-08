/**
    data type       character
    bytes           1
    format char     %c

    note            used to store any single
                    character in ''
*/

#include<stdio.h>

void main(){
    char ip;

    printf("\n size of character is %d bytes", sizeof(ip));
    printf("\n Enter any character \t");
    ip = getch();
    printf("\n Character is %c", ip);
}
