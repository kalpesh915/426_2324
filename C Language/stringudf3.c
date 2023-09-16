#include<stdio.h>

/**
    convert entered sting in lowercase
    a-z = 97 - 122
    A-Z = 65 - 90
    difference is 32
*/

int lower(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    lower(ip);
}

int lower(char ip[100]){
    int i = 0;

    while(ip[i] != '\0'){
        if(ip[i] >= 65 && ip[i] <= 90){
            ip[i] = ip[i] + 32;
        }
        i++;
    }

    printf("\n New String is %s", ip);
}
