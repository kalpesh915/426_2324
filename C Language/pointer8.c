#include<stdio.h>

/**
    swap two numbers with use of call by value concept
*/
void swap(int, int);

void main(){
    int ip1, ip2;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    printf("\n in Main() Before swap ip1 is %d and ip2 is %d", ip1, ip2);
    swap(ip1, ip2);
    printf("\n in Main() After swap ip1 is %d and ip2 is %d", ip1, ip2);
}

void swap(int i, int j){
    int tmp;
    tmp = i;
    i = j;
    j = tmp;
    printf("\n in swap() ip1 is %d and ip2 is %d", i, j);
}
