#include<stdio.h>

/// write data in file until user press X

void main(){
    char c;
    FILE *fp = fopen("data2.txt", "r");
        while(!feof(fp)){/// end of file
            c = fgetc(fp);
            printf("%c ", c);
        }
    fclose(fp);
}
