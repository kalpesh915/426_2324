#include<stdio.h>
#include<string.h>

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    printf("\n New String in uppercase is %s", strupr(ip));
    printf("\n New String in lowercase is %s", strlwr(ip));
}
