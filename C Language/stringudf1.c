#include<stdio.h>

/**
    find length of string with use of custom UDF function

    012345 6
    rajkot\0
*/

int length(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    ans = length(ip);
    printf("\n Length of String is %d", ans);
}

int length(char ip[100]){
    int i = 0;

    while(ip[i] != '\0'){
        i++;
    }

    return i;
}
