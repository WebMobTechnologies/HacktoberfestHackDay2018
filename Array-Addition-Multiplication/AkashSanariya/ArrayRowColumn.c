#include<stdio.h>
void main()
{

    int a[100][100],i=0,j=0,n,count=0,multi=1;
    printf("Enter The Size Of Array:-");
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
        for(j=0;j<n;j++)
        {
            printf("Enter The Array a[%d][%d]=",i,j);
            scanf("%d",&a[i][j]);
        }
    }
    for(i=0;i<n;i++)
    {
        for(j=0;j<n;j++)
        {
            count=count+a[i][j];
        }
        printf("\nAddation Of Row %d=%d\n",i,count);
        count=0;
    }
    for(j=0;j<n;j++)
    {
        for(i=0;i<n;i++)
        {
            multi=multi*a[i][j];
        }
        printf("\n Multiplication Of Column %d=%d\n",j,multi);
        multi=1;
    }
}
