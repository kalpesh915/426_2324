#include<stdio.h>

/**
    count how many digits in enetered number

    ex. 128 = 3
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans++;
        ip = ip / 10;
    }

    printf("\n Answer is %d", ans);
}
