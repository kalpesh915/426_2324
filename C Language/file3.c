#include<stdio.h>

/// write data in file until user press X

void main(){
    char c;
    FILE *fp = fopen("data2.txt", "w");
    printf("\n Write Data in File press X for exit \t");
        while(c != 'X'){
            c = getche();
            if(c == 'X'){
                break;
            }else{
                fputc(c, fp);
            }
        }
    fclose(fp);
}
