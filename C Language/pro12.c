#include<stdio.h>

/** swap values of two variable without use of third
variable */

void main(){
    int  ip1, ip2;

    ip1 = 10;
    ip2 = 20;

    printf("\n before swap value of ip1 is %d and ip2 is %d", ip1, ip2);
                        /// ip1     ip2
                        /// 10      20
    ip1 = ip1 + ip2;    /// 30      20
    ip2 = ip1 - ip2;    /// 30      10
    ip1 = ip1 - ip2;    /// 20      10
    printf("\n after swap value of ip1 is %d and ip2 is %d", ip1, ip2);
}
