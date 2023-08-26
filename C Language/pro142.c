#include<stdio.h>

/**
    print entered number is palindrome or not
    12321
    >> <<
*/

void main(){
    int ip, tmp, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    tmp = ip;

    while(tmp > 0){
        ans = ans * 10;
        ans += tmp % 10;
        tmp = tmp / 10;
    }

    if(ans == ip){
        printf("\n Palindrome number");
    }else{
        printf("\n Try another number");
    }
}
