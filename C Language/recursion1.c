#include<stdio.h>

/**
    count how many digits in number with recursion
*/

int count(int);

void main(){
    int ip, ans;
    printf("\n Enter any value \t");
    scanf("%d", &ip);

    ans = count(ip);
    printf("\n Total %d Digits in %d Number ", ans, ip);
}

int count(int tmp){
    if(tmp == 0){
        return 0;
    }else{
        return 1 + count(tmp / 10);
    }
}
