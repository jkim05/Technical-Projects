/*
   Name: Jefferson T. Kim
   Date: 02/11/2022
   Course/Section: IT 206.2D1
   Assignment: Assignment 2 (Solution Implementation)
  
  
   Description: This solution design will have the ability to track ticket sales and the amount raised for these events. 
   Tickets are sold by groups per table with a maximum of 8 available seats.

   •	Allow the user to enter: First name of the fund-raising event (“2022 Spring Fund Raiser”)
   •	Ask how many tables are available for the event. (Max table capacity = 50).
   •	Ask the user to enter the number of tickets being purchased by a group.
   •	2 types of tickets – adult = $100, kids = $50
   •	Model one charity event.
   
   */
   
import javax.swing.JOptionPane;
public class CharityFund {
	public static void main (String[] args) {
      String name;
      int capacity;
      int adultTix;
      int childTix;
      int totalTix;
      int totalSold;
      double totalRev;
   
   do {
         name = getName();
         capacity = getCapacity();
         adultTix = getAdultTix();
			childTix = getChildTix();
         totalRev = getTotalRev(adultTix, childTix);
		} while (JOptionPane.showInputDialog(null, "Enter 1 for sale, 2 to quit.").equals("1"));

		JOptionPane.showMessageDialog(null, "Event: " + name + "\n" +
                  "Tickets avaivlable " + capacity + "\n" +
                  "Adult tickets sold: " + adultTix + "\n" +
                  "Child tickets sold: " + childTix + "\n" +
                  "Total tickets sold: " + totalSold + "\n" +
                  "Total revenue: " + String.format("$%.2f", totalRev));
	  }
   
      private static String getName() {
         String name;
      do {
         name = (JOptionPane.showInputDialog("Enter the name of the charity event: "));
      if (name.equals("")) {
         JOptionPane.showInputDialog(null, "ERROR - Please re-enter a name a name for the event: ");
       } 
       } while (name.equals(""));
       return name;
   }
   
      private static int getCapacity() {
         int capacity;
     do {
      try {
         capacity = Integer.parseInt(JOptionPane.showInputDialog("Enter the capacity of the charity event (50 is default) : "));
      }
      catch (NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "Please enter a number");
      }
      if (capacity = 0) {
         JOptionPane.showInputDialog(null, "ERROR - Please enter a positive numnber ");
         } 
         } while (capacity < 0 || capacity > 50);
         return capacity;
       }
     
      private static int getAdultTix() {
         int adultTix;
         int adultTixTotal;
      do {
         try {
         adultTix = Integer.parseInt(JOptionPane.showInputDialog("Enter the number of adult tickets: "));
         return adultTix;
         ++adultTixTotal;
      }
      catch (NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "Please enter a number");
      }
      if (capacity = 0) {
         JOptionPane.showInputDialog(null, "ERROR - Please enter a positive numnber ");
         } 
         } while (adultTix < 0 || adultTix > capacity);
       }
     
      private static int getChildTix() {
         int childTix;
         int childTixTotal;
      do {
      try {
         childTix = Integer.parseInt(JOptionPane.showInputDialog("Enter a number of child tickets: "));
         return childTix;
         ++childTixTotal;
      }
      catch (NumberFormatException e) {
         JOptionPane.showMessageDialog(null, "Please enter a number");
      }
      if (capacity = 0) {
         JOptionPane.showInputDialog(null, "ERROR - Please enter a positive numnber ");
         } 
         } while (childTix < 0 || childTix > capacity);
       }
         
      private static int getTix(int capacity) {
          int totalTix = capacity * 8;
          return totalTix;
          }
          
       private static double getTotalRev() {
         double A_PRICE = 100.00;
         double C_PRICE = 50.00;
         double totalRev = (adultTix* A_PRICE) + (childTix * C_PRICE);
         return totalRev;
       }
   }
         
         
         
     
   
      

   