import java.util.Arrays;
import java.util.Scanner;
import java.util.TreeMap;

public class SumsByTown {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        TreeMap<String,Double> sumsByTown = new TreeMap<>();
        int n = Integer.parseInt(scan.nextLine());
        for (int i = 0; i < n; i++) {
            String[] tokens = scan.nextLine().split("\\|");
            String town = tokens[0].trim();
            double income = Double.parseDouble(tokens[1].trim());
            if(sumsByTown.containsKey(town)){
                sumsByTown.put(town,sumsByTown.get(town)+income);
            }else{
                sumsByTown.put(town,income);
            }
        }
        for (String key: sumsByTown.keySet()){
            System.out.println(key + " -> " + sumsByTown.get(key));
        }

    }


}
