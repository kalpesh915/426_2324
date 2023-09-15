#include<stdio.h>

/**
    create a custom function to check entered character is Digit
    or not

    0 = 47, 9 = 58
*/

int isNumber(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isNumber(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isNumber(char c){
    if((c >= 47 && c <= 58)){
        return 1;
    }else{
        return 0;
    }
}
