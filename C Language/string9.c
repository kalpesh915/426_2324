#include<stdio.h>
#include<string.h>

/**
    strcmp used to compare two strings
    0 = both strings are same
    +1 = string 1 is greater than string 2
    -1 = string 2 is greater than string 1
*/

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);
    printf("\n Enter any string \t");
    gets(ip2);

    ans = strcmp(ip1, ip2);
    printf("\n Answer is %d", ans);
}
