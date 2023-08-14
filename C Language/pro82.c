/**
    simple if statement

    find minimum number out of two numbers
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ans;

    printf("\n Enter any value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter any value for ip2 \t");
    scanf("%d", &ip2);

    if(ip1 < ip2){
        ans = ip1;
    }else{
        ans = ip2;
    }

    printf("\n Minimum is %d", ans);
}
