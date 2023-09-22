#include<stdio.h>

/// write data in file until user press X

void main(){
    char c;
    FILE *fp = fopen("data2.txt", "r");
        c = fgetc(fp);
        printf("%c", c);
        c = fgetc(fp);
        printf("%c", c);
        c = fgetc(fp);
        printf("%c", c);
        c = fgetc(fp);
        printf("%c", c);
    fclose(fp);
}
