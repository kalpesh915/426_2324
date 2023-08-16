#include<stdio.h>

/**
    check entered character is vowel or not
    aeiou
*/

void main(){
    char c;
    int uv, lv;
    printf("\n Enter any character \t");
    c = getche();

    lv = (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u');
    uv = (c == 'A' || c == 'E' || c == 'I' || c == 'O' || c == 'U');

    if(lv || uv){
        printf("\n vowel detected");
    }else{
        printf("\n not a vowel");
    }
}
