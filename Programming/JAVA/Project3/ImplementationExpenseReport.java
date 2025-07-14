import javax.swing.JOptionPane;
public class Items {
   public static void main(String[] args) {
      final int MAX_ITEMS = 100;
     

      Expense [] items = new Expense(MAX_ITEMS);
      items[0] = new Expense();
      items[1] = new Expense();
      items[2] = new Expense();
     
      populateItems(items);
      displayReceipt(items);
   }
  
  
   private static void displayReceipt(Product[] items) {
      String receipt = "***Employee Report***\n\n";
      double total = 0;

      public static double total(Expense[] items) {
         if (items.length == 0) {
            return 0;
            }
            else {
               double sum = 0.0;
               for (int x = 0; x < items.length; x++) {
                  sum += items[x].getExpense();
                  }
               return sum;
           }

     
      reciept += "Date: " + date + "\n";
      reciept += "Name: " + name + "\n";
      receipt += "Exnepnse Type: " +expenseType + "\n";
      receipt += "Expense Amount: " + String.format("$%.2f", cost) + "\n";
      receipt += "Total: " + String.format("$%.2f", total) + "\n";    
      JOptionPane.showMessageDialog(null, receipt);
   }
}
