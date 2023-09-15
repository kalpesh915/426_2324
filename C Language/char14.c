#include<stdio.h>

/**
    create a custom function to check entered character is alphabet
    or not

    A - Z   =   65 - 90
    a - z   =   97 - 122
*/

int isAlphabet(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isAlphabet(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isAlphabet(char c){
    if((c >= 65 && c <= 90) || (c >= 97 && c <= 122)){
        return 1;
    }else{
        return 0;
    }
}
