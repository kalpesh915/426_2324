#include<stdio.h>

/**
    print entered number in reverse order
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans = ans * 10;
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Answer is %d", ans);
}
