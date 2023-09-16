#include<stdio.h>

/**
    convert entered sting in uppercase
    a-z = 97 - 122
    A-Z = 65 - 90
    difference is 32
*/

int upper(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    upper(ip);
}

int upper(char ip[100]){
    int i = 0;

    while(ip[i] != '\0'){
        if(ip[i] >= 97 && ip[i] <= 122){
            ip[i] = ip[i] - 32;
        }
        i++;
    }

    printf("\n New String is %s", ip);
}
