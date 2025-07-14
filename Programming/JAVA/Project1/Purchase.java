
/*
/*
   Name: Jefferson T. Kim
   Date: 04/11/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 9 
/*
 * In this file, complete tasks as identified below, only inside of the commented areas
 */
import javax.swing.JOptionPane;

public class Purchase {
    private static final double SALES_TAX_RATE = 0.05; // Example sales tax rate

    public static void main(String[] args) {
        final int MAX_ITEMS = 3;

        Product[] items = new Product[MAX_ITEMS];

        populateItems(items);
        displayReceipt(items);
    }

    private static void populateItems(Product[] items) {
        Book book1 = new Book("Under the Dome", 9.95);
        DVD dvd1 = new DVD("Casablanca", 14.99, "Drama");
        ConsultingService service1 = new ConsultingService("DVD Repair", 100.00, 1);

        if (items.length > 0) {
            items[0] = book1;
        }
        if (items.length > 1) {
            items[1] = dvd1;
        }
        if (items.length > 2) {
            items[2] = service1;
        }
    }

    private static void displayReceipt(Product[] items) {
        String receipt = "***Bob's Retail Store***\n\n";
        double total = 0;
        double salesTax = 0;

        for (Product item : items) {
            if (item != null) {
                receipt += item.toString() + " - $" + String.format("%.2f", item.getCost()) + "\n";
                total += item.getCost();
            }
        }

        salesTax = total * SALES_TAX_RATE;

        receipt += "\nTotal: " + String.format("$%.2f", total) + "\n";
        receipt += "Sales Tax: " + String.format("$%.2f", salesTax) + "\n";
        receipt += "Grand Total: " + String.format("$%.2f", total + salesTax) + "\n";
        JOptionPane.showMessageDialog(null, receipt);
    }
}
//*********************************************************