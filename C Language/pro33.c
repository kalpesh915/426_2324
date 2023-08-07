/**
    type        :   short unsigned int
    bytes       :   2 bytes
    bits        :   16 bits
    use         :   16 bits
    sign bit    :   0 bit
    range       :   2 ^ 16
    format char :   %u
*/
#include<stdio.h>

void main(){
    short unsigned int ip;
    printf("\n Size of short unsigned int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%u", &ip);
    printf("\n value of ip is %u", ip);

}
