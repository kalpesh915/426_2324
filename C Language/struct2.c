#include<stdio.h>

struct student{
    int roll;           /// 04
    char name[20];      /// 20
    float marks;        /// 04
                        /// 28
};

void main(){
    struct student std1 = {11, "Meet", 66.78};
    printf("\n Size of Structure is %d Bytes ",sizeof(std1));

    printf("\n Roll No. is %d", std1.roll);
    printf("\n Name is %s", std1.name);
    printf("\n Marks are %f", std1.marks);
}
