#include<stdio.h>

/// write data in file

void main(){
    FILE *fp = fopen("data1.txt", "w");
        fputs("Welcome to world of files with C Language", fp);
    fclose(fp);
}
