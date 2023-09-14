#include<stdio.h>
#include<string.h>

/**
    strcpy used to copy strings
*/

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);

    strcpy(ip2, ip1); /// destination, source

    printf("\n String 1 is %s", ip1);
    printf("\n String 2 is %s", ip2);
}
