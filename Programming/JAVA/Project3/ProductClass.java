/*
* In this file, complete tasks as identified below, only inside of the commented areas
 */

import javax.swing.JOptionPane;
public class Purchase {
   public static void main(String[] args) {
      final int MAX_ITEMS = 3;
     
      // BEGIN: Create an array of type Products, called items
      Product [] items = new Product(MAX_ITEMS);
      items[0] = new Product(10.00);
      items[1] = new Product(15.00);
      items[2] = new Product(10.00);
      // END

      populateItems(items);
      displayReceipt(items);
   }
  
   private static void populateItems(Product[] items) {
  
      // BEGIN: In the items array, hardcode the creation of one book, one DVD, and one consulting service
      
     
      // END
   }
  
   private static void displayReceipt(Product[] items) {
      String receipt = "***Bob's Retail Store***\n\n";
      double total = 0;
  
      // BEGIN: Loop through all of the items in the array of type Product to calculate the total, and print out the item's cost
      //        and a String representation of the item for each item
      public static double total(Product[] items) {
         if (items.length == 0) {
            return 0;
            }
            else {
               double sum = 0.0;
               for (int x = 0; x < items.length; x++) {
                  sum += items[x].getProduct();
                  }
               return sum;
           }

      // END
     
      // BEGIN: Create one line that will calculate the sales tax based on the total 
      
      // END
     
      receipt += "Total: " + String.format("$%.2f", total) + "\n";
      receipt += "Sales Tax: " + String.format("$%.2f", salesTax) + "\n";
      receipt += "Grand Total: " + String.format("$%.2f", total + salesTax) + "\n";     
      JOptionPane.showMessageDialog(null, receipt);
   }
}



//*********************************************************