#include<stdio.h>

void main(){
    int ip[10];

    printf("\n size of ip is %d bytes", sizeof(ip));

    ip[0] = 115;
    ip[1] = 171;
    ip[2] = 161;
    ip[3] = 114;
    ip[4] = 121;
    ip[5] = 114;
    ip[6] = 115;
    ip[7] = 161;
    ip[8] = 181;
    ip[9] = 110;

    printf("\n value is %d" ,ip[8]);
}
