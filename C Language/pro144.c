#include<stdio.h>

/**
    print factorial of entered number
    5 = 5 * 4 * 3 * 2 * 1 = 120
*/

void main(){
    int i, ip, ans = 1;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    for(i=1; i<=ip; i++){
        ans *= i;
    }

    printf("\n Answer is %d", ans);
}
