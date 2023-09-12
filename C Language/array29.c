#include<stdio.h>

/**
                0123456
    name[20] = "Rajkot\0";

    \0 = null character used to indicate end of string
*/

void main(){
    char name[20];
    int i=0;
    printf("Enter name of your city \t");
    gets(name);

    while(name[i] != '\0'){
        printf(" %c", name[i]);
        i++;
    }
}
