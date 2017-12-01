import java.util.Scanner;
public class SymetricNumbers {

    public static boolean checkSymetricity(int number){
        if (Integer.toString(number).equals(new StringBuilder(Integer.toString(number)).reverse().toString()))
            return true;
        else
            return false;
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int end = input.nextInt();
        for(int number = 1 ; number<=end ; number++){
            if(checkSymetricity(number)==true){
                System.out.print(number);
                if(number!=end) System.out.print(" ");
            }
        }
    }

}