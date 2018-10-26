#include<stdio.h>
#include<string.h>
int main()
{
    char st[100];
    int i,j,stringlength,k;
    printf("Enter The String:-");
    scanf("%s",st);
    stringlength=strlen(st);

    /*printf("%d",stringlength);*/
    for(i=0;i<stringlength;i++)
    {
        for(j=0;j<stringlength;j++)
        {
            printf("%c",st[i]);
            for(k=0;k<stringlength-2;k++)
            {
                printf("%c",st[k]);
            }
            printf("%c\t",st[j]);
        }
    }

}

