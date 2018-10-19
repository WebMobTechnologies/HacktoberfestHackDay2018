class task3
{
public static void main(String arg[])
{
int k=1,l=1,ans,temp;
int i=2,m=2;
  while(true)
  {
	m++;

	ans=k+l;
	temp=ans;

	while(temp!=0 )
	{
		temp/=10;
		i--;
	}
	if(i==0)
	{
	System.out.println(m);
	break;
	}
	else
	{
		i=2;
	}
	k=l;
	l=ans;
  }
}

}