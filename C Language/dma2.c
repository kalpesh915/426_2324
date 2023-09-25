#include<stdio.h>
#include<stdlib.h>

/**
    realloc(ptr, new bytes)
*/

void main(){
    int bytes, blocks, i, *ptr;

    printf("\n Enter number of bytes to allocate memory \t");
    scanf("%d", &bytes);

    ptr = (int*) malloc(bytes);

    blocks = bytes / sizeof(int);

    for(i=0; i<blocks; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    printf("\n Enter new number of bytes to allocate memory \t");
    scanf("%d", &bytes);

    realloc(ptr, bytes);

    blocks = bytes / sizeof(int);

    for(i=0; i<blocks; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    free(ptr);
}
