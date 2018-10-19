class task
{
public static void main(String arg[])
{
 for(int i=0;i<5;i++)
 { 
	for(int j=0;j<5;j++)
	{
	 if(j>(3-i))
	 {
		System.out.print("*");
	 }
	 else
	 {
	 		System.out.print(" ");
	 }
	}
		 		System.out.println();

 }
 
 for(int i=0;i<5;i++)
 { 
	for(int j=0;j<5;j++)
	{
	 if(j>i)
	 {
		System.out.print("*");
	 }
	 else
	 {
	 		System.out.print(" ");
	 }
	}
		 		System.out.println();

 }
 
		
}

}