/**
    type        :   long unsigned int
    bytes       :   4 bytes
    bits        :   32 bits
    use         :   32 bits
    sign bit    :   0 bit
    range       :   2 ^ 32
    format char :   %lu
*/
#include<stdio.h>

void main(){
    long unsigned int ip;
    printf("\n Size of long unsigned int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%lu", &ip);
    printf("\n value of ip is %lu", ip);

}
