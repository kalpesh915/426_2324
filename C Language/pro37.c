/**
    data type       double
    bytes           8
    format char     %lf

    note            used to store values with
                    floating point
*/

#include<stdio.h>

void main(){
    double ip;

    printf("\n size of double is %d bytes", sizeof(ip));
    printf("\n Enter value for ip \t");
    scanf("%lf", &ip);
    printf("\n value of ip is %lf", ip);
    printf("\n value of ip is %.3lf", ip);
}
