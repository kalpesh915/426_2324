/**
    type        :   short signed int
    bytes       :   2 bytes
    bits        :   16 bits
    use         :   15 bits
    sign bit    :   1 bit
    range       :   2 ^ 15
    format char :   %d
*/
#include<stdio.h>

void main(){
    short signed int ip;
    printf("\n Size of short signed int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%d", &ip);
    printf("\n value of ip is %d", ip);

}
