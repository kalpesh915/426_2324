#include<stdio.h>

/**
    enum : enumeration user define data type with specific set of
    values
*/

enum boolean {false, true};

void main(){
    enum boolean b1;
    b1 = false;

    if(b1){
        printf("\n Condition is True");
    }else{
        printf("\n Condition is False");
    }
}
