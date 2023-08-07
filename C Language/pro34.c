/**
    type        :   long signed int
    bytes       :   4 bytes
    bits        :   32 bits
    use         :   31 bits
    sign bit    :   1 bit
    range       :   2 ^ 31
    format char :   %ld
*/
#include<stdio.h>

void main(){
    long signed int ip;
    printf("\n Size of long signed int is %d bytes ",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%ld", &ip);
    printf("\n value of ip is %ld", ip);

}
