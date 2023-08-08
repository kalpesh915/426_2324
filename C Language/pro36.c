/**
    data type       float
    bytes           4
    format char     %f

    note            used to store values with
                    floating point
*/

#include<stdio.h>

void main(){
    float ip;

    printf("\n size of float is %d bytes", sizeof(ip));
    printf("\n Enter value for ip \t");
    scanf("%f", &ip);
    printf("\n value of ip is %f", ip);
    printf("\n value of ip is %.3f", ip);
}
