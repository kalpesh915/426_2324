#include<stdio.h>

/**
    print table of entered number with for loop
*/

void main(){
    int i, ip;

    printf("\n Enter any number to print table \t");
    scanf("%d", &ip);

    for(i=1; i<=10; i++){
        printf("\n %3d * %3d = %3d", ip, i, ip * i);
    }
}
