#include<stdio.h>
void main()
{

    int i,j,no,k;
    printf("Enter The Number You Can Print:-");
    scanf("%d",&no);
    for(i=no;i>=1;i--)
    {
        for(j=no;j>=1;j--)
        {
            for(k=i;k>=1;k--)
            {
                printf("%d",j);
            }
        }
        printf("\n");
     }
}
