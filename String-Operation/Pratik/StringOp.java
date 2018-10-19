import java.util.*;
class StringOp{
  public static void main(String[] args) {
    String input="";
    String dup="";
    String dup1="";
    int count = 0;
    int i,j;
    Scanner s = new Scanner(System.in);
    System.out.println("Enter the String");
    input = s.nextLine();

    System.out.println("Entered String is: "+input);

            for(i=0;i<input.length();i++){
              for(j=i+1;j<input.length();j++){
                  if(input.charAt(i) != input.charAt(j)){

                  }else{
                    count++;
                    dup += String.valueOf(input.charAt(i));
                  }
              }
            }
            if(count == 0){
              System.out.println("String has a unique character");
            }else{
              System.out.println("String has a duplicate character");
            }

            if(dup != ""){
            System.out.println("duplicate characters in String are: "+dup);
          }else{
            System.out.println("There's no duplicate characters in String");
          }
  }

}
