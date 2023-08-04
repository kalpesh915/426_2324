#include<stdio.h>

/// basic arithmatic operation

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n sum is %d", ip1 + ip2);
    printf("\n sub is %d", ip1 - ip2);
    printf("\n mul is %d", ip1 * ip2);
    printf("\n div is %d", ip1 / ip2);
    printf("\n mod is %d", ip1 % ip2);
}
