#include<stdio.h>
#include<string.h>

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    ans = strrev(ip);
    printf("\n New String is %s", ip);
}
