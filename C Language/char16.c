#include<stdio.h>

/**
    create a custom function to check entered character is uppercase
    or not

    0 = 47, 9 = 58
*/

int isUpperCase(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isUpperCase(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isUpperCase(char c){
    if((c >= 65 && c <= 90)){
        return 1;
    }else{
        return 0;
    }
}
