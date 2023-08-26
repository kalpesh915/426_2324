#include<stdio.h>

/**
    sum of every of digits in enetered number

    ex. 128 = 11
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Answer is %d", ans);
}
