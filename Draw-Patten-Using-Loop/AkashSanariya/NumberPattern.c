/* Pattern Of Number
1
2 3
4 5 6
7 8  9 10
*/
#include<stdio.h>
void main()
{
    int i=1,j=1,no,k;
    printf("Enter The Number You Can Print Pattern:-");
    scanf("%d",&no);
    k=i;
    for(i=1;i<=no;i++)
    {
        for(j=1;j<=i;j++)
        {
            printf("%d\t",k);
            k++;
        }
        printf("\n");
    }
}
