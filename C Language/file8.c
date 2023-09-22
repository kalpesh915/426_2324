#include<stdio.h>

/// append example

void main(){
    FILE *fp = fopen("data4.txt", "a");
    fputs("This is Demo Text for writing in file\n", fp);
    fclose(fp);
}
